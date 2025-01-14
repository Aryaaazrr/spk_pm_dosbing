<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileMatching\ProfileMatchingRequest;
use App\Models\Alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileMatchingController extends Controller
{
    public function handleProfileMatching(ProfileMatchingRequest $request)
    {
        dd($request->all());
        try {
            $validated = $request->validated();

            $selectedKriteria = $request->input('kriteria');
            $selectedAlternatif = $request->input('alternatif') ?? [];

            $results = $this->profileMatching($selectedKriteria, $selectedAlternatif);

            return view('profile-matching.result', compact('results'));
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    private function profileMatching($kriteria, $alternatif)
    {
        $results = [];
        foreach ($alternatif as $lecturer) {
            $totalScore = 0;
            foreach ($kriteria as $criterion) {
                $totalScore += $this->calculateScore($lecturer, $criterion);
            }
            $results[] = [
                'lecturer' => $lecturer,
                'score' => $totalScore,
            ];
        }

        usort($results, fn($a, $b) => $b['score'] <=> $a['score']);
        return $results;
    }

    private function calculateScore($lecturer, $criterion)
    {
        // Contoh penghitungan skor untuk setiap kriteria
        // Implementasi spesifik sesuai rumus Profile Matching
        return rand(0, 100);
    }
}