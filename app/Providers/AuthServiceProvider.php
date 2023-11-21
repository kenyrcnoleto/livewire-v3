<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;

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
        Gate::define('add10', function(User $user, string $prop) {
            //dd('oi', $prop);
            return $prop == 'num2';
        });

        Gate::define(
            'delete-user',
            fn(User $user, int $userId) => $user->isAdmin()
        );
        
    }
}
