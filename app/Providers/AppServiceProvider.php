<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Aplicacion\Services\PrincipalService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PrincipalService::class, function ($app) {
            return new PrincipalService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
