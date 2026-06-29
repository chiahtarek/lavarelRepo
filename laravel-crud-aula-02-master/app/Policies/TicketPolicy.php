<?php

namespace App\Policies;

use App\Models\User;
use App\Http\Controllers\PermissionController;

class TicketPolicy
{
    /**
     * Create a new policy instance.
     */
    public function viewAny(User $user): bool {
        return PermissionController::isAuthorized('ticket.index');
    }

    public function view(User $user, Ticket $ticket): bool {
        return PermissionController::isAuthorized('ticket.show');
    }

    public function create(User $user): bool {
         return PermissionController::isAuthorized('ticket.create');
    }

    public function update(User $user, Curso $ticket): bool {
        return PermissionController::isAuthorized('ticket.edit');

    }

    public function delete(User $user, Curso $ticket): bool {
        return PermissionController::isAuthorized('ticket.delete');

    }
    public function restore(User $user, Curso $ticket): bool {
        return PermissionController::isAuthorized('ticket.delete');
    }

    public function forceDelete(User $user, Curso $ticket): bool
    {
        return PermissionController::isAuthorized('ticket.delete');
    }
}
