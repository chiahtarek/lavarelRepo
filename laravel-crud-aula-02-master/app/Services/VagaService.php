<?php

namespace App\Services;

use App\Repositories\VagaRepository;

class VagaService extends BaseService {

    public function __construct(protected VagaRepository $repository) {}

    protected function getRepository(): mixed {
        return $this->repository;
    }
}