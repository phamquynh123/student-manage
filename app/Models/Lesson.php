<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';
    protected $fillable = [
        'class_id',
        'name',
        'slug',
        'time_study',
    ];
}
