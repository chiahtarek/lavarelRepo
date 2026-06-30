<?php

namespace App\Policies;

use App\Models\Carro;
use App\Models\User;
use App\Services\PermissionService;

class CarroPolicy {

    public function __construct(protected PermissionService $service) {}

    public function viewAny(User $user): bool {
        return $this->service->isAuthorized('carro.index');
    }

    public function view(User $user, Carro $carro): bool {
        return $this->service->isAuthorized('carro.show');
    }

    public function create(User $user): bool {
        return $this->service->isAuthorized('carro.create');
    }

    public function update(User $user, Carro $carro): bool {
        return $this->service->isAuthorized('carro.edit');
    }

    public function delete(User $user, Carro $carro): bool {
        return $this->service->isAuthorized('carro.delete');
    }

    public function restore(User $user, Carro $carro): bool {
        return $this->service->isAuthorized('carro.delete');
    }

    public function forceDelete(User $user, Carro $carro): bool {
        return $this->service->isAuthorized('carro.delete');
    }
}