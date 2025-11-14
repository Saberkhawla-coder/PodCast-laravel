<?php

namespace App\Policies;

use App\Models\Podcast;
use App\Models\User;

class PodcastPolicy
{
    /**
     * Tout utilisateur peut voir les podcasts.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Tout utilisateur peut voir les détails d’un podcast.
     */
    public function view(?User $user, Podcast $podcast): bool
    {
        return true;
    }

    /**
     * Seuls les admins et animators peuvent créer un podcast.
     */
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'animator']);
    }

    /**
     * L'admin peut tout modifier, sinon l’animator propriétaire seulement.
     */
    public function update(User $user, Podcast $podcast): bool
    {
        return $user->role === 'admin' || 
               ($user->role === 'animator' && $user->id === $podcast->user_id);
    }

    /**
     * L'admin peut tout supprimer, sinon l’animator propriétaire seulement.
     */
    public function delete(User $user, Podcast $podcast): bool
    {
        return $user->role === 'admin' || 
               ($user->role === 'animator' && $user->id === $podcast->user_id);
    }

    public function restore(User $user, Podcast $podcast): bool
    {
        return false;
    }

    public function forceDelete(User $user, Podcast $podcast): bool
    {
        return false;
    }
}
