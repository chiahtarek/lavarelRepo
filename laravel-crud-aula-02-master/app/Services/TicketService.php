<?php

namespace App\Services;

use App\Repositories\TicketRepository;

class TicketService extends BaseService {

    public function __construct(protected TicketRepository $repository) {}

    protected function getRepository(): mixed {
        return $this->repository;
    }
}