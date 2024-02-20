<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define("demacheur", function (User $user) {
            return $user->hasRole("demacheur");
        });

        Gate::define("manager", function (User $user) {
            return $user->hasRole("manager");
        });

        // Gate::define("employe", function (User $user) {
        //     return $user->hasRole("employe");
        // });

        Gate::before(function (User $user) {
            return $user->hasRole("superadmin");
        });

        // Gate::after(function (User $user) {
        //     return $user->hasRole("superadmin");
        // });
    }
}
