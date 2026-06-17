<?php

namespace App\Repositories;

use App\Models\Carro;

class CarroRepository extends BaseRepository {

    public function __construct(protected Carro $model) {}

    protected function getModel(): mixed {
        return $this->model->newInstance();
    }
}