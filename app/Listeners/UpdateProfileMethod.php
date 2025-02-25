<?php

namespace App\Listeners;

use App\Events\AlternatifUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateProfileMethod
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AlternatifUpdated $event): void
    {
        $alternatif = $event->alternatif;
    }
}