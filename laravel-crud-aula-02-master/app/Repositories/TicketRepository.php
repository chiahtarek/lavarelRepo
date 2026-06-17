<?php

namespace App\Repositories;

use App\Models\Ticket;

class TicketRepository extends BaseRepository {

    public function __construct(protected Ticket $model) {}

    protected function getModel(): mixed {
        return $this->model->newInstance();
    }

}