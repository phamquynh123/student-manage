<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\Class;

class ClassRepository extends EloquentRepository
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Class::class;
    }
}
