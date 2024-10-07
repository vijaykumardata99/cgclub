<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model {
    public $timestamps = false;
    protected $table = 'tbl_members';
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name','last_name', 'mobile', 'email', 'address'
    ];
}