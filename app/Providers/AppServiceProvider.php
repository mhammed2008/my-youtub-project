<?php

namespace App\Providers;

use Illuminate\Database\LazyLoadingViolationException;
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
//        LazyLoadingViolationException::
    }
}
