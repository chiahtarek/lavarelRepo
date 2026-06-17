<?php

namespace App\Repositories;

use App\Models\Vaga;

class VagaRepository extends BaseRepository {

    public function __construct(protected Vaga $model) {}

    protected function getModel(): mixed {
        return $this->model->newInstance();
    }
}