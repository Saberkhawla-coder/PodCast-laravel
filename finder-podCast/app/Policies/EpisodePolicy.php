<?php

namespace App\Policies;

use App\Models\Episode;
use App\Models\User;

class EpisodePolicy
{
    /**
     * Tout utilisateur peut voir les épisodes.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Tout utilisateur peut voir les détails d’un épisode.
     */
    public function view(?User $user, Episode $episode): bool
    {
        return true;
    }

    /**
     * Seuls les admins et animateurs peuvent créer un épisode.
     */
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'animateur']);
    }

    /**
     * L’admin ou l’animateur propriétaire peut modifier.
     */
    public function update(User $user, Episode $episode): bool
    {
        return $user->role === 'admin' ||
               ($user->role === 'animateur' && $user->id === $episode->user_id);
    }

    /**
     * L’admin ou l’animateur propriétaire peut supprimer.
     */
    public function delete(User $user, Episode $episode): bool
    {
        return $user->role === 'admin' ||
               ($user->role === 'animateur' && $user->id === $episode->user_id);
    }

    public function restore(User $user, Episode $episode): bool
    {
        return false;
    }

    public function forceDelete(User $user, Episode $episode): bool
    {
        return false;
    }
}
