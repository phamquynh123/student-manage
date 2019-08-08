<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
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
        return $this->belongsTo('App\Models\Subject', 'subject_id', 'id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function classInfor()
    {
        return $this->hasMany('App\Models\ClassInfor', 'id', 'class_id');
    }
}
