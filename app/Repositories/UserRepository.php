<?php

namespace App\Repositories;

use App\User as Model;
use Illuminate\Support\Facades\Storage;

class UserRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Метод находит пользователя по id   с полями , 
     * которые могут быть доступны только в личном кабинете (email ).
     * 
     * @return Collection
     */
    public function getOwnProfile($id)
    {
        $columns = ['name', 'description', 'email', 'avatar'];

        $user = $this->startConditions()->find($id, $columns);

        if (!$user->avatar) {
            $user->avatar = 'default/profile.png';
        } else {
            $user->avatar = Storage::url($user->avatar);
        }

        return $user;
    }
}
