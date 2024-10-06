<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MasterUser;
use App\Models\OTPModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller {
    function login(Request $request) {

        session()->forget('user_id');
        session()->forget('username');

        if ($request->method() == 'POST') {
            $validators = Validator::make(
                $request->all(),
                [
                    'username' => 'required',
                    'password' => 'required'
                ],
                [
                    'username.required' => 'Please enter User ID',
                    'password.required' => 'Please enter Password'
                ]
            );
            if ($validators->fails()) {
                return redirect()->back()->withInput()->withErrors($validators);
            }
            $username = $request->input('username');
            $password = $request->input('password');
             $userData = MasterUser::select('salt')->where('username', $username)->get()->first();
            if ($userData == null) {
                return redirect()->back()->withInput()->with('info', 'Wrong Username or Password Please check it once again !');
            }
            $salt = $userData->salt;
            $salt_password = $password . $salt;
            $hased_password = hash('SHA512', $salt_password);
            $user = MasterUser::select(
                'id', 'username', 'password', 'role_id', 'mobile_num','salt'
            )
                ->where('username', $username)->where('password', $hased_password)->where('salt', $salt)
                ->get()
                ->first();

            if (!empty($user)) {
                    session(['user_id' => $user->id, 'username' => $user->username, 'role_id' => $user->role_id]);
                   
                    if($user->role_id == 1 || $user->role_id == 2){
                        
                        $otp = 1234;
                        $otpObj = new OTPModel(["mobile" => $user->mobile_num, "otp" => $otp, "ip_address" => $request->ip()]);
                        $otpObj->save();
                        $smsController = new SmsController();
                        $mobile = $otpObj->mobile;
                        $message = "लॉगिन हेतु आपका ओ.टी.पी. " . $otp . " हैं | CG Club, CHiPS";
                        // $sms_response = $smsController->sendSMS($mobile, $message, $this->$otp);
                        
                        $sms_response = NULL;
                        $data = [];
                        // if ($sms_response == NULL ||  @$sms_response->status != 200) {
                        
                        if ($sms_response != NULL) {
                            
                        
                            $data = ["status" => 400, "message" => "OTP Not Sent ! Please Try Again", "data" => null];
                            return redirect()->back()->with('info', $data['message']);
                        }
                        // masking mobile number
                        $phoneNumber = $mobile;
                                        $showFirstDigits = 0; //how many digits to show in the beggining of the phone number
                                        $showLastDigits = 4; // how many digits to show in the end of the phone number
                        $maskedNum = substr_replace($phoneNumber,str_repeat('*',strlen($phoneNumber) - $showFirstDigits - $showLastDigits),
                                     $showFirstDigits, strlen($phoneNumber) - $showFirstDigits - $showLastDigits);
                          
                         // Encrypt the values
                        $encryptedMobileNum = encrypt($mobile);
                        $encryptedOtpNum = encrypt($otp);

                        // Generate the URL with encrypted parameters
                        $url = route('otpVerification', [
                            'mobileNum' => $encryptedMobileNum,
                            'otpNum' => $encryptedOtpNum,
                        ]);
                        //dd($url );die; 
                        // Optionally, you can redirect or return the URL
                        return redirect($url)->with('info', 'OTP has been sent to ' .$maskedNum.' number..');
                        
                        // $data["message"] = "OTP sent to $maskedNum number.";
                        // $mobileNum = encrypt($mobile);
                        // $otpNum = encrypt($otp);
                        
                        // return redirect()->route('otpVerification', compact('mobileNum', 'otpNum'))->with('info', $data['message']);

                    } else {
                        return redirect()->route('/login')->with('info', 'Unrecognized Role!');;
                    }
                }
                return redirect()->back()->with('info', 'Invalid User ID and Password! Please enter valid details.');
            }
         return view('login');
    }

    function otpVerification(Request $request) {

        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        //dd(decrypt($request->mobileNum));dd($request->otpNum);die;
        $otpTable = DB::table('tbl_otp')->where(['mobile' => decrypt($request->mobileNum), 'otp' => decrypt($request->otpNum), 'is_verified' => '0'])
                                ->orderByDesc('id')->first();

        if($otpTable) {
            //sucess -> top verified.
            return view('otp-verification', compact('otpTable'));
        }
        //send error-> please resend otp
        $data = ["status" => 400, "message" => "OTP Not Sent! Please Resend Again.", "data" => null];
        return redirect()->route('login')->with('info', $data['message']);
    }

    function verifyOtp(Request $request) {
        $input_otp = $request->input('otp_field');
        $mobileNum = $request->input('mobileNum');
        $otpNum = $request->input('otpNum');

        // dd($input_otp, $request->mobileNum, $request->otpNum);  

        // Fetch the OTP record again to confirm it
        $otpTable = DB::table('tbl_otp')->where(['mobile' => $mobileNum, 'otp' => $otpNum, 'is_verified' => '0'])
        ->orderByDesc('id')->first();
       // dd(session('role_id'));die;
        if(session('role_id')==1){
            if ($otpTable && $otpTable->otp == $input_otp) {
                // Mark the OTP as verified
                DB::table('tbl_otp')->where('id', $otpTable->id)->update(['is_verified' => '1']);
        
                // success response
                return redirect()->route('dashboard')->with('success', 'OTP verified successfully.');
            }
        }
       
        if(session('role_id')==2){
            if ($otpTable && $otpTable->otp == $input_otp) {
                // Mark the OTP as verified
                DB::table('tbl_otp')->where('id', $otpTable->id)->update(['is_verified' => '1']);
        
                // success response
                return redirect()->route('member-dashboard')->with('success', 'OTP verified successfully.');
            }
        }
         // Error response
        return redirect()->route('otpVerification')->with('error', 'Invalid OTP. Please try again.');
 
    }

    public function logout() {
        Session::flush();
        return redirect('/login');
    }
    //for login manju

    function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd > $range);
        return $min + $rnd;
    }

    function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet); // edited
        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[$this->crypto_rand_secure(0, $max - 1)];
        }
        return  $token;
    }

    function getNumToken($length)
    {
        $token = "";
        $codeAlphabet = "0123456789";
        $max = strlen($codeAlphabet); // edited
        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[$this->crypto_rand_secure(0, $max - 1)];
        }
        return  $token;
    }
}