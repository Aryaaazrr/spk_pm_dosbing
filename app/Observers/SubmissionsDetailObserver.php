<?php

namespace App\Observers;

use App\Models\ProfileMethod;
use App\Models\Subkriteria;
use App\Models\SubmissionDetail;
use App\Models\Submissions;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class SubmissionsDetailObserver
{
    /**
     * Handle the SubmissionDetail "created" event.
     */
    public function created(SubmissionDetail $submissionDetail): void
    {
        try {
            Log::info("Observer berjalan", ['id_submission' => $submissionDetail->id_submission]);

            $submission = Submissions::find($submissionDetail->id_submission);
            if (!$submission) {
                Log::warning('Submission tidak ditemukan.', ['id_submission' => $submissionDetail->id_submission]);
                return;
            }

            $user = User::find($submission->id);
            if (!$user || !$user->id_angkatan) {
                Log::warning('User tidak ditemukan atau tidak memiliki id_angkatan.', ['id_submission' => $submissionDetail->id_submission]);
                return;
            }

            $id_angkatan = $user->id_angkatan;

            $alternatifCounts = SubmissionDetail::join('submission', 'submission.id_submission', '=', 'submission_detail.id_submission')
                ->join('users', 'users.id', '=', 'submission.id')
                ->where('users.id_angkatan', $id_angkatan)
                ->selectRaw('id_alternatif, COUNT(*) as total_permintaan')
                ->groupBy('id_alternatif')
                ->pluck('total_permintaan', 'id_alternatif');

            $id_alternatif = $submissionDetail->id_alternatif;
            if (!$id_alternatif) {
                Log::error('SubmissionDetail tidak memiliki id_alternatif', ['id_submission' => $submissionDetail->id_submission]);
                return;
            }

            $total_permintaan = $alternatifCounts[$id_alternatif] ?? 0;

            $subkriteriadata = ProfileMethod::join('subkriteria', 'subkriteria.id_subkriteria', '=', 'profile_method.id_subkriteria')
            ->where('profile_method.id_alternatif', $id_alternatif)
            ->value('subkriteria.subkriteria_name') ?? 0;

            $pemenuhanKuota = ProfileMethod::join('subkriteria', 'subkriteria.id_subkriteria', '=', 'profile_method.id_subkriteria')
            ->where('profile_method.id_alternatif', $id_alternatif)
            ->where('subkriteria.id_kriteria', 2)
            ->value('subkriteria.subkriteria_name');

            preg_match_all('/\d+/', $subkriteriadata, $matches);
            $rangeStart = isset($matches[0][0]) ? (int) $matches[0][0] : 0;
            $rangeEnd = isset($matches[0][1]) ? (int) $matches[0][1] : $rangeStart;

            // komen revisi
            // $rasio = ($total_permintaan > 0 && $kuotaMax > 0) ? ($total_permintaan / $kuotaMax) * 100 : 0;

            $rasio = ($total_permintaan >= $rangeEnd) ? 'Terpenuhi' : 'Belum Terpenuhi';

            if ($rasio !== $pemenuhanKuota) {
                ProfileMethod::where('id_alternatif', $id_alternatif)
                ->where('id_kriteria', 2)
                ->update(['id_subkriteria' => 6]);
            }

            Log::info('Perhitungan Kuota:', [
                'id_users' => $user->id,
                'angkatan' => $user->id_angkatan,
                'id_alternatif' => $id_alternatif,
                'total_permintaan' => $total_permintaan,
                'subkriteria' => $subkriteriadata,
                'rangeStart' => $rangeStart,
                'rangeEnd' => $rangeEnd,
                'status' => $rasio,
                'pemenuhanKuota' => $pemenuhanKuota,
            ]);
        } catch (\Exception $e) {
            Log::error('Terjadi kesalahan saat menghitung kuota:', [
                'id_submission' => $submissionDetail->id_submission,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Handle the SubmissionDetail "updated" event.
     */
    public function updated(SubmissionDetail $submissionDetail): void
    {
        //
    }

    /**
     * Handle the SubmissionDetail "deleted" event.
     */
    public function deleted(SubmissionDetail $submissionDetail): void
    {
        //
    }

    /**
     * Handle the SubmissionDetail "restored" event.
     */
    public function restored(SubmissionDetail $submissionDetail): void
    {
        //
    }

    /**
     * Handle the SubmissionDetail "force deleted" event.
     */
    public function forceDeleted(SubmissionDetail $submissionDetail): void
    {
        //
    }
}