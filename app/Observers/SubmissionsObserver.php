<?php

namespace App\Observers;

use App\Events\SubmissionCreated;
use App\Jobs\ProcessSubmission;
use App\Models\Angkatan;
use App\Models\Kriteria;
use App\Models\ProfileMethod;
use App\Models\SubmissionDetail;
use App\Models\Submissions;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class SubmissionsObserver
{
    /**
     * Handle the Submissions "committed" event.
     */
    public function saved(Submissions $submissions): void
    {
        
    }


    /**
     * Handle the Submissions "updated" event.
     */
    public function updated(Submissions $submissions): void
    {
        //
    }

    /**
     * Handle the Submissions "deleted" event.
     */
    public function deleted(Submissions $submissions): void
    {
        //
    }

    /**
     * Handle the Submissions "restored" event.
     */
    public function restored(Submissions $submissions): void
    {
        //
    }

    /**
     * Handle the Submissions "force deleted" event.
     */
    public function forceDeleted(Submissions $submissions): void
    {
        //
    }
}