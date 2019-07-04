<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    protected $table = 'classes';
    protected $fillable = [
    	'name',
    	'slug',
    	'subject_id',
    	'user_id',
    	'status',
    ];

    public function subject() 
    {
   		return $this->belongsTo('App\Models\Subject', 'subject_id');
   	}
}
