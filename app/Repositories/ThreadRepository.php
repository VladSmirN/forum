<?php

namespace App\Repositories;

use App\Thread as Model;

class ThreadRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Model::class;
    }

}
