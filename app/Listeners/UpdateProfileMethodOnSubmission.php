<?php

namespace App\Listeners;

use App\Events\SubmissionCreated;
use App\Models\Kriteria;
use App\Models\ProfileMethod;
use App\Models\Submissions;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UpdateProfileMethodOnSubmission
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
    public function handle(SubmissionCreated $event): void
    {
        $submission = $event->submission;
        $generation = $submission->angkatan;

        $chosenAlternatif = Submissions::where('angkatan', $generation)
            ->with('submission_detail:id_submission,id_alternatif')
            ->get()
            ->flatMap(fn($submission) => $submission->submission_detail->pluck('id_alternatif'))
            ->countBy();

        Log::info("Alternatif terpilih untuk angkatan {$generation}: ", $chosenAlternatif->toArray());

        $quotaLimits = Kriteria::pluck('keterangan', 'id_kriteria');

        Log::info("Batas kuota dari kriteria: ", $quotaLimits->toArray());

        // Iterasi setiap alternatif yang dipilih dan hitung nilai profil
        foreach ($chosenAlternatif as $alternatifId => $jumlahDipilih) {
            $quota = $quotaLimits[$alternatifId] ?? null; // Ambil kuota berdasarkan ID Kriteria

            if ($quota === null) {
                Log::warning("Alternatif ID {$alternatifId} tidak memiliki batas kuota yang ditetapkan!");
                continue;
            }

            // Hitung nilai profil berdasarkan rasio jumlah pemilih terhadap kuota
            $nilaiProfil = ($jumlahDipilih <= $quota) ? round($jumlahDipilih / $quota, 2) : 1;

            Log::info("Nilai Profil Alternatif ID {$alternatifId}: {$nilaiProfil} (Dipilih: {$jumlahDipilih}, Kuota: {$quota})");

            // Simpan ke database
            DB::table('profil_alternatif')->updateOrInsert(
                ['id_alternatif' => $alternatifId, 'angkatan' => $generation],
                ['nilai' => $nilaiProfil, 'updated_at' => now()]
            );
        }
    }

}