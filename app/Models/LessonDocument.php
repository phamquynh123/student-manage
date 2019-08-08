<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonDocument extends Model
{
    protected $table = 'lesson_document';
    protected $fillable = [
        'lesson_id',
        'document_id',
    ];

    public function document()
    {
        return $this->hasMany('App\Models\Document', 'id', 'document_id');
    }
}
