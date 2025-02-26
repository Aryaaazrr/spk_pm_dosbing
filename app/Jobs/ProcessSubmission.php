<?php

namespace App\Jobs;

use App\Models\ProfileMethod;
use App\Models\SubmissionDetail;
use App\Models\Submissions;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ProcessSubmission implements ShouldQueue
{
    use InteractsWithQueue, Queueable;

    protected $submissions;

    public function __construct(Submissions $submission)
    {
        $this->submissions = $submission;
    }

    public function handle()
    {
        try {
            Log::info("Menjalankan ProcessSubmission untuk submission: ", ['id_submission' => $this->submissions->id_submission]);

            $user = User::find($this->submissions->id);

            if (!$user || !$user->id_angkatan) {
                Log::warning('Submission dibuat user tanpa data angkatan.', ['id_submission' => $this->submissions->id_submission]);
                return;
            }

            // Tunggu hingga SubmissionDetail tersedia
            $maxRetries = 5;
            $retryInterval = 2; // Coba setiap 2 detik

            for ($i = 0; $i < $maxRetries; $i++) {
                $submissionDetails = SubmissionDetail::where('id_submission', $this->submissions->id_submission)->get();

                if (!$submissionDetails->isEmpty()) {
                    break;
                }

                Log::info("Menunggu SubmissionDetail dalam job untuk id_submission: " . $this->submissions->id_submission);
                sleep($retryInterval);
            }

            if ($submissionDetails->isEmpty()) {
                Log::warning('SubmissionDetail masih tidak ditemukan setelah menunggu di job.', ['id_submission' => $this->submissions->id_submission]);
                return;
            }

            $id_angkatan = $user->id_angkatan;

            $alternatifCounts = SubmissionDetail::join('submission', 'submission.id_submission', '=', 'submission_detail.id_submission')
                ->join('users', 'users.id', '=', 'submission.id_user')
                ->where('users.angkatan', $id_angkatan)
                ->selectRaw('id_alternatif, COUNT(*) as total_permintaan')
                ->groupBy('id_alternatif')
                ->pluck('total_permintaan', 'id_alternatif');

            foreach ($submissionDetails as $detail) {
                $id_alternatif = $detail->id_alternatif;
                $total_permintaan = $alternatifCounts[$id_alternatif] ?? 0;

                $kuotaMax = ProfileMethod::where('id_alternatif', $id_alternatif)->value('id_nilai') ?? 0;

                $rasio = ($total_permintaan > 0 && $kuotaMax > 0) ? ($total_permintaan / $kuotaMax) * 100 : 0;

                Log::info('Perhitungan kuota untuk alternatif', [
                    'id_alternatif' => $id_alternatif,
                    'total_permintaan' => $total_permintaan,
                    'kuota_maksimum' => $kuotaMax,
                    'rasio_kuota' => $rasio . '%'
                ]);
            }

        } catch (\Exception $e) {
            Log::error('Terjadi kesalahan saat menghitung kuota dalam job:', [
                'id_submission' => $this->submissions->id_submission,
                'error' => $e->getMessage()
            ]);
        }
    }

}
