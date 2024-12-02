<?php

namespace App\Providers;

use App\View\Components\DashboardLayout;
use App\View\Components\IndexLayout;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('components.index-layout', IndexLayout::class);
        Blade::component('components.dashboard-layout', DashboardLayout::class);
    }
}
