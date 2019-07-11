<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = [
        'name',
        'slug',
        'number_of_test',
    ];

    public function class()
    {
        return $this->hasMany('App\Models\Class', 'subject_id');
    }
}
