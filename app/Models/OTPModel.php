<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTPModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_otp';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $fillable = ['mobile', 'otp', 'create_ip'];
}
