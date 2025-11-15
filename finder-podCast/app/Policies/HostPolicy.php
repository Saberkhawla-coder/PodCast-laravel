<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Host;

class HostPolicy
{
    public function viewAny(?User $user): bool
    {
        return true; // Tous peuvent voir la liste
    }

    public function view(?User $user, Host $host): bool
    {
        return true; // Tous peuvent voir les détails
    }

    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function update(User $user, Host $host): bool
    {
        return $user->role === 'admin';
    }

    public function delete(User $user, Host $host): bool
    {
        return $user->role === 'admin';
    }
}
