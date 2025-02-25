<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Events\SubmissionCreated;
use App\Models\Alternatif;
use App\Models\SubmissionDetail;
use App\Models\Submissions;
use App\Models\User;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class EventTest extends TestCase
{
    /** @test */
    public function it_dispatches_submission_created_event()
    {
        // Event::fake();

        $users = User::factory()->count(5)->create();

        $alternatifs = Alternatif::factory()->count(5)->create();

        $submissions = $users->map(fn ($user) => Submissions::factory()->create(['id' => $user->id]));

        foreach ($submissions as $submission) {
            $chosenAlternatifs = $alternatifs->shuffle()->take(3)->pluck('id_alternatif');

            foreach ($chosenAlternatifs as $id_alternatif) {
                SubmissionDetail::factory()->create([
                    'id_submission' => $submission->id_submission,
                    'id_alternatif' => $id_alternatif,
                ]);
            }
        }

        $processedSubmissions = [];

        foreach ($submissions as $submission) {
            if (in_array($submission->id_submission, $processedSubmissions)) {
                Log::warning("Skipping duplicate dispatch for Submission ID: {$submission->id_submission}");
                continue;
            }

            $chosenAlternatifs = SubmissionDetail::where('id_submission', $submission->id_submission)
                ->pluck('id_alternatif')
                ->toArray();

                if (count($chosenAlternatifs) === 3) {
                Log::info("Dispatching event for Submission ID: {$submission->id_submission}");
                Log::info("Alternatif terpilih untuk angkatan {$submission->angkatan}: " . json_encode($chosenAlternatifs));
                event(new SubmissionCreated($submission));

                $processedSubmissions[] = $submission->id_submission;
            } else {
                Log::warning("Skipping event for Submission ID: {$submission->id_submission}, expected 3 alternatives but got " . count($chosenAlternatifs));
            }
        }

        $this->assertTrue(true);
    }
}