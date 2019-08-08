<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionRequired extends Model
{
    protected $table = 'question_requireds';
    protected $fillable = [
        'subject_id',
        'name_test',
        'number_question',
        'time_required',
        'number_of_question_to_pass',
    ];
}
