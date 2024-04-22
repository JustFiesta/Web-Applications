<?php

namespace App\Providers;

use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //to mozna zakomentowac do zadanka 8.13
        //Gate::policy(Country::class, CountryPolicy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->afterResolving(EncryptCookies::class, function ($middleware) {
            $middleware->disableFor('laravel_session');
            $middleware->disableFor('XSRF-TOKEN');
        });

        // Gate::define('is-admin', function ($user) {
        //     return $user->isAdmin();
        // });

        Gate::before(function ($user, $ability) {
            return $user->isAdmin() ? true : null;
        });

    }
}
