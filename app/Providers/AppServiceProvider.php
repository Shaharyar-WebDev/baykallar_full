<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Services\Navbar\NavbarService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->singleton('navbar', NavbarService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::share('navbar', app(NavbarService::class));
    }
}
