<?php

namespace App\Policies;

use App\Models\Ticket;
use App\Models\User;
use App\Services\PermissionService;

class TicketPolicy {

    public function __construct(protected PermissionService $service) {}

    public function viewAny(User $user): bool {
        return $this->service->isAuthorized('carro.index');
    }

    public function view(User $user, Ticket $ticket): bool {
        return $this->service->isAuthorized('ticket.show');
    }

    public function create(User $user): bool {
        return $this->service->isAuthorized('ticket.create');
    }

    public function update(User $user, Ticket $ticket): bool {
        return $this->service->isAuthorized('ticket.edit');
    }

    public function delete(User $user, Ticket $ticket): bool {
        return $this->service->isAuthorized('ticket.delete');
    }

    public function restore(User $user, Ticket $ticket): bool {
        return $this->service->isAuthorized('ticket.delete');
    }

    public function forceDelete(User $user, Ticket $ticket): bool {
        return $this->service->isAuthorized('carro.delete');
    }
}