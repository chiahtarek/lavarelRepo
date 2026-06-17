<?php

namespace App\Services;

use App\Repositories\CarroRepository;

class CarroService extends BaseService {

    public function __construct(protected CarroRepository $repository) {}

    protected function getRepository(): mixed {
        return $this->repository;
    }
}