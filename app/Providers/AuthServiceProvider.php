<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isAdmin', function($user){
              return $user->user_type == "admin"; 
        });
        $gate->define('isAuthor', function($user){
              return $user->user_type == "author"; 
        });
        $gate->define('isUser', function($user){
              return $user->user_type == "user"; 
        });

        Gate::define('manage-user', function($user){
            return $user->hasAnyRole(['author', 'admin']);
        });

        Gate::define('dashboard', function($user){
            return $user->hasAnyRole(['author', 'admin']);
        });

        Gate::define('edit-user', function($user){
            return $user->hasRole('admin');
        });
        Gate::define('delete-user', function($user){
            return $user->hasRole('admin');
        });

        Gate::define('admin', function($user){
            return $user->hasRole('admin');
        });
    }
}
