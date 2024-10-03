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
            $user = DB::table('users')->where('username', $request->username)->select('id', 'username', 'password', 'role_id', 'mobile_num')->first();

            if ($user) {
                if(Hash::check($request->password, $user->password)) {
                    session(['user_id' => $user->id, 'username' => $user->username, 'role_id' => $user->role_id]);
                    if($user->role_id == 1 || $user->role_id == 2){

                        $otp = 1234;
                        $otpObj = new OTPModel(["mobile" => $user->mobile_num, "otp" => $otp, "create_ip" => $request->ip()]);
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

                        $data["message"] = "OTP sent to $maskedNum number.";
                        $mobileNum = $mobile;
                        $otpNum = $otp;
                        return redirect()->route('otpVerification', compact('mobileNum', 'otpNum'))->with('info', $data['message']);

                    } else {
                        return redirect()->route('/login')->with('info', 'Unrecognized Role!');;
                    }
                }
                return redirect()->back()->with('info', 'Wrong Password! Please check it once.');
            }
            return redirect()->back()->with('info', 'Invalid User ID and Password! Please enter valid details.');
        }
        return view('login');
    }

    function otpVerification(Request $request) {

        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;

        $otpTable = DB::table('tbl_otp')->where(['mobile' => $request->mobileNum, 'otp' => $request->otpNum, 'is_verified' => '0'])
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

        if ($otpTable && $otpTable->otp == $input_otp) {
            // Mark the OTP as verified
            DB::table('tbl_otp')->where('id', $otpTable->id)->update(['is_verified' => '1']);
    
            // success response
            return redirect()->route('dashboard')->with('success', 'OTP verified successfully.');
        }
         // Error response
        return redirect()->route('otpVerification')->with('error', 'Invalid OTP. Please try again.');
    }

    public function logout() {
        Session::flush();
        return redirect('/login');
    }
}