<?php

namespace App\Providers;

use App\Events\SubmissionCreated;
use App\Listeners\UpdateProfileMethodOnSubmission;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider
{
    // protected $listen = [
    //     SubmissionCreated::class => [
    //         UpdateProfileMethodOnSubmission::class,
    //     ],
    // ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }
}