<?php

namespace App\Http\Controllers;

use App\Models\CoachModel;
use App\Models\MasterUser;
use App\Models\MemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller {
    public function dashboard() {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        return view('admin.index', compact('roleData'));
    }

    public function addMember() {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        $memberData = MemberModel::all();
        return view('admin.add-member', compact('memberData', 'roleData'));
    }

    public function storeMember(Request $request) {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;

        $request->validate([
            'member_name'=>'required',
            'mobile_num'=>'required',
            'member_email_id'=>'required',
            'member_address'=>'required'
        ]);
        $member = new MemberModel();
        $member->member_name = $request->member_name;
        $member->mobile_num = $request->mobile_num;
        $member->member_email_id = $request->member_email_id;
        $member->member_address = $request->member_address;
        $member->save();
        return redirect()->route('member-list', compact('roleData'))->with('success', 'Member added successfully.');
    }
    public function getMemberList() {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        $memberList = MemberModel::all();
        return view('admin.member-list', compact('roleData', 'memberList'));
    }
    public function addCoach() {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        $coachData = CoachModel::all();
        return view('admin.add-coach', compact('coachData', 'roleData'));
    }

    public function storeCoach(Request $request) {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;

        $request->validate([
            'coach_name'=>'required',
            'coach_num'=>'required',
            'sports_name'=>'required',
            'designation'=>'required'
        ]);
        $member = new CoachModel();
        $member->coach_name = $request->coach_name;
        $member->coach_num = $request->coach_num;
        $member->sports_name = $request->sports_name;
        $member->designation = $request->designation;
        $member->save();
        return redirect()->route('coach-list', compact('roleData'))->with('success', 'Coach added successfully.');
    }
    public function getCoachList() {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        $coachList = CoachModel::all();
        return view('admin.coach-list', compact('roleData', 'coachList'));
    }
}