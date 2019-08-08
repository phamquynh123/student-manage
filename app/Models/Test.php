<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';
    protected $fillable = [
        'test_required_id',
        'user_id',
        'test_status',
        'realT_time_do_exercise',
        'score',
    ];
}
