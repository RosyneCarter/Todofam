<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-user', function($user){
            return $user->hasAnyRole(['Parent']);
        });
        Gate::define('manage-role', function($user){
            return $user->IsAdmin(['Parent']);
        });

        Gate::define('edit-users', function($user){
            return $user->hasAnyRole(['Parent']);
        });
        Gate::define('delete-users', function($user){
            return $user->hasAnyRole(['Parent']);
        });
        Gate::define('modify-users', function($user){
            return $user->hasAnyRole(['Parent']);
        });
    }
}
