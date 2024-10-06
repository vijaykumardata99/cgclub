<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterUser extends Model
{
    use HasFactory;
    protected $table='users';
    protected $primaryKey='id';
    protected $fillable=[
        'first_name',
        'last_name',
        'username',
        'email',
        'mobile_num',
        'password',
        'salt',
        'role_id'
    ];
}
