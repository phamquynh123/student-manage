<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionDetail extends Model
{
    protected $table = 'question_details';
    protected $fillable = [
        'question_id',
        'title',
        'content',
        'status',
    ];
}
