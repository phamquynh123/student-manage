<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonExercise extends Model
{
    protected $table = 'lesson_exercise';
    protected $fillable = [
        'lesson_id',
        'exercise_id',
        'deadline',
    ];

    public function exercise()
    {
        return $this->hasMany('App\Models\Exercise', 'id', 'exercise_id');
    }
}
