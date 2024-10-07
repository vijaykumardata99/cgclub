<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoachRequest;
use App\Models\CoachModel;
use App\Models\MasterUser;
use App\Models\MemberModel;
use Illuminate\Http\Request;
use App\Http\Requests\MemebrUserRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Input;
use App\Models\Auth\AuthModel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class AdminController extends Controller {
    public function dashboard() {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        $membercount = MemberModel::selectRaw('IFNULL(COUNT(id), 0) as membercount')->first()->membercount;
        $coachcount = CoachModel::selectRaw('IFNULL(COUNT(id), 0) as coachcount')->first()->coachcount;
        return view('admin.index', compact('roleData','membercount','coachcount'));
    }
    
    //add member with login id and password
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

    public function generate_password($string)
    {
        $salt = $this->getToken(7);
        $enc_key = config('app.encryption_key');
        $salt_password1 = $enc_key . trim($string) . $enc_key;
        $hased_password1 = hash('SHA512', $salt_password1);
        // ========================================================
        $salt_password = $hased_password1 . $salt;
        $hased_password = hash('SHA512', $salt_password);
        return array("hashed_password" => $hased_password, "salt" => $salt);
    }

    ////////////////////////////////////////////////////////////////////////

    public function member_details() {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        $memberData = MemberModel::all();
        return view('admin.add-member', compact('memberData', 'roleData'));
    }

    public function member_details_insert(MemebrUserRequest $request)
    {
        //dd($request->all());
        $request->validated();
        $input = $request->except('_token');
        $button_submit = trim($request->input('btnSubmit'));
        if ($button_submit == 'submit' && $request->method() == 'POST') {
            //$txtPassword = $request->mobile;
              $txtPassword='12345';
            // $pass_salt = $this->generate_password($txtPassword);
            // $hashed_password = $pass_salt['hashed_password'];
            // $salt = $pass_salt['salt'];
            $hashed_password='a2e5ef27d9fde2611d93d79501e1aea9650fe3c1bb3ff1b78dc6a31eb05bd5bfcb6541332cb4166498d9a32dcaa220c77fec69e6b3110ad7cb2b072c61bf9af1';
            $salt='RWIY5mQ';
            DB::beginTransaction();
            try {
                $master_user=new MasterUser();
                $member_details = new MemberModel();
                $last_id = MemberModel::max('id');
                $username = 'Member000' . $last_id + 1;
                $master_user->first_name = $request->first_name;
                $master_user->last_name = $request->last_name;
                $master_user->mobile = $request->mobile;
                $master_user->email = $request->email;
                $master_user->username = $username;
                $master_user->create_by = $request->session()->get('role_id');
                $master_user->ip_address = $request->ip();
                $master_user->role_id = 2;
                ////////////////////////////////
                //$master_user->is_password_changed = 1;
                $master_user->password = $hashed_password;
                $master_user->salt = $salt;
                
                $master_user->save();
                $member_details->first_name = $request->first_name;
                $member_details->last_name = $request->last_name;
                $member_details->mobile = $request->mobile;
                $member_details->email = $request->email;
                $member_details->address = $request->address;
                $member_details->ip_address = $request->ip();
                $master_user->create_by = $request->session()->get('role_id');
                $member_details->save();
                DB::commit();
                if ($request->session()->get('role_id') == 1) {
                    //return redirect()->route('member-list', compact('roleData'))->with('success', 'Member added successfully.');
                    return redirect()->route("admin.memberdetails")->with('success', 'Member Created successfully.');
               
                } else {
                    return redirect()->route("admin.memberdetails")->with('info', 'Some Error !!! Please Try Again');
               
                }
            } catch (\Throwable $th) {
                return redirect()->back()->withInput()->with('info', 'Internal Server Error - ' . $th);
                DB::rollBack();
            }
        }
    }
    //member list show start
    public function getMemberList() {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        $members = MemberModel::select(
            'id',
            'first_name',
            'last_name',
            'mobile',
            'email',
            'address'
        ) ->get();

        // $members = DB::select(DB::raw("
        // SELECT id,first_name,last_name,mobile,email,address FROM tbl_members"));

        return view('admin/member-list', compact('members','roleData'));
    
    }
    //member list show end

    //add coach start
    public function coach_details() {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        return view('admin.aad-coach', compact('roleData'));
    }

    public function coach_details_insert(CoachRequest $request)
    {
        //dd($request->all());
        $request->validated();
        $input = $request->except('_token');
        $button_submit = trim($request->input('btnSubmit'));
        if ($button_submit == 'submit' && $request->method() == 'POST') {
            DB::beginTransaction();
            try {
                $coach=new CoachModel();
                $coach->coach_name = $request->coach_name;
                $coach->coach_num = $request->coach_num;
                $coach->sports_name = $request->sports_name;
                $coach->designation = $request->designation;
                $coach->ip_address = $request->ip();
                $coach->create_by = $request->session()->get('role_id');
                $coach->save();
                DB::commit();
                if ($request->session()->get('role_id') == 1) {
                    return redirect()->route("admin.coachdetails")->with('success', 'Coach Details Saved successfully.');
               
                } else {
                    return redirect()->route("admin.coachdetails")->with('info', 'Some Error !!! Please Try Again');
               
                }
            } catch (\Throwable $th) {
                return redirect()->back()->withInput()->with('info', 'Internal Server Error - ' . $th);
                DB::rollBack();
            }
        }
    }
    //add coach end

    public function getCoachList() {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        $coachList = CoachModel::all();
        return view('admin.coach-list', compact('roleData', 'coachList'));
    }
}