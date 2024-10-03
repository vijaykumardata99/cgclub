<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoachModel extends Model {
    public $timestamps = false;
    protected $table    = 'tbl_coach';
    protected $primaryKey = 'id';
    protected $fillable = [
        'coach_name','coach_num','sports_name','designation'
    ];
}