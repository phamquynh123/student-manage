<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $table = 'homeworks';
    protected $fillable = [
        'lesson_id',
        'user_id',
        'lession_exercise_id',
        'content',
        'time_commit_ex',
        'status',
        'mark',
        'comment',
        'time_marking',
    ];
}
