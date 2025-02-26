<?php

namespace App\Providers;

use App\Models\Submissions;
use App\Observers\SubmissionsObserver;
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
        Submissions::observe(SubmissionsObserver::class);
    }
}