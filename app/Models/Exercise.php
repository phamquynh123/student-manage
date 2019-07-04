<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $table = 'exercies';
    protected $fillable = [
    	'title',
    	'slug',
    	'content',
    ];
}
