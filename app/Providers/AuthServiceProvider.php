<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define("superadmin", function (User $user) {
            return $user->hasRole("superadmin");
        });
        Gate::define("manager", function (User $user) {
            return $user->hasRole("manager");
        });

        Gate::define("employe", function (User $user) {
            return $user->hasRole("employe");
        });

        Gate::after(function (User $user) {
            return $user->hasRole("superadmin");
        });
    }
}
