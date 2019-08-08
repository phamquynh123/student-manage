<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterCustom extends Model
{
    protected $table = 'registers';

    protected $fillable = [
        'name',
        'email',
        'subject_id',
        'status'
    ];

    public function subject()
    {
        return $this->hasOne('App\Models\Subject', 'subject_id');
    }
}
