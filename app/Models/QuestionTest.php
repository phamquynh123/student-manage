<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionTest extends Model
{
    protected $table = 'question_test';
    protected $fillable = [
        'test_id',
        'test_question_id',
        'question_choose_id',
        'check_status',
    ];
}
