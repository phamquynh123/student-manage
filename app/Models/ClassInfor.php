<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassInfor extends Model
{
    protected $table = 'class_infors';
    protected $fillable = [
    	'class_id',
    	'user_id',
    ];
}
