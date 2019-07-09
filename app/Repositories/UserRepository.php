<?php
namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\User;

class UserRepository extends EloquentRepository
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }
}
