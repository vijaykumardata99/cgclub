<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model {
    public $timestamps = false;
    protected $table = 'tbl_members';
    protected $primaryKey = 'id';
    protected $fillable = [
        'member_name', 'mobile_num', 'member_email_id', 'member_address'
    ];
}