<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Podcast;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        \App\Models\Podcast::class => \App\Policies\PodcastPolicy::class,
        \App\Models\Episode::class => \App\Policies\EpisodePolicy::class,
        \App\Models\User::class => \App\Policies\UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        //
        Gate::define('update_role', function(User $user, Podcast $podcast){
            return $user->id===$podcast->user_id;
        });
    }
}
