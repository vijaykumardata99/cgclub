<?php 

namespace App\Http\Controllers;

use App\Models\MasterUser;

class MemberController extends Controller {
    public function member_dashboard() {
        $role_id = session('role_id');
        $roleData = $role_id ? MasterUser::find($role_id) : null;
        return view('member.index', compact('roleData'));
    }
}