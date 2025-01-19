<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileMatching\ProfileMatchingRequest;
use App\Http\Requests\Submission\SubmissionRequest;
use App\Models\Alternatif;
use App\Models\Aspek;
use App\Models\Kriteria;
use App\Models\ProfileMethod;
use App\Models\Subkriteria;
use App\Models\Submissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileMatchingController extends Controller
{
    public function handleProfileMatching(ProfileMatchingRequest $request)
    {
        try {
            $validated = $request->validated();

            // $data['judul'] = $request->input('judul');
            // $data['deskripsi'] = $request->input('deskripsi');
            $selectedKriteria = $request->input('kriteria', []);
            $selectedAlternatif = $request->input('alternatif', []);

            if (empty($selectedKriteria) || empty($selectedAlternatif)) {
                return back()->withErrors('Kriteria dan alternatif harus dipilih.')->withInput();
            }

            Log::info('Selected Kriteria:', ['data' => $selectedKriteria]);
            Log::info('Selected Alternatif:', ['data' => $selectedAlternatif]);

            $data['resultsGAP'] = $this->gapProfil($selectedAlternatif, $selectedKriteria);
            $data['normalizedGAP'] = $this->normalizeGAP($data['resultsGAP']);
            $data['factorValue'] = $this->factorValue($data['normalizedGAP']);
            $data['totalValue'] = $this->totalValue($data['factorValue']);
            $data['ranking'] = $this->rankAlternatif($data['totalValue']);

            $data['data_aspek'] = Aspek::all();
            $data['data_kriteria'] = Kriteria::all();

            if (empty($data['resultsGAP']) || empty($data['ranking'])) {
                return back()->withErrors('Terjadi kesalahan saat memproses data.')->withInput();
            }

            return view('profile-matching.result', $data);

        } catch (\Exception $e) {
            Log::error('Error in Profile Matching:', ['message' => $e->getMessage()]);

            return response()->json(['error' => 'Terjadi kesalahan saat memproses data: ' . $e->getMessage()], 500);
        }
    }

    private function gapProfil($alternatif, $kriteria)
    {
        $resultsGAP = [];
        $gapValues = [];

        $dosenProfile = ProfileMethod::with('kriteria', 'subkriteria')->whereIn('id_alternatif', $alternatif)->get();

        foreach ($dosenProfile as $dosen) {

            $dosenSubkriteria = $dosen->subkriteria;
            $dosenKriteria = $dosen->kriteria;

            foreach ($kriteria as $key => $subkriteriaId) {
                $idealValue = Subkriteria::with('kriteria')->find($subkriteriaId);
                $idealKriteria = $idealValue->kriteria;

                if ($dosenKriteria->id_kriteria == $idealKriteria->id_kriteria) {
                    $gapValues[$idealValue->id_kriteria] = $dosenSubkriteria->nilai - $idealValue->nilai;
                }
            }

            $resultsGAP[$dosen->id_alternatif] = $gapValues;
        }
        Log::info('Ideal Value:', ['data' => $idealValue]);
        Log::info('GAP Values:', ['dosenId' => $dosen->id_alternatif, 'gapValues' => $gapValues]);

        return $resultsGAP;
    }

    private function normalizeGAP($resultsGAP)
    {
        $normalizedGAP = [];
        $normalizedValues = [];
        $conversionTable = [
            0 => 5,
            1 => 4.5,
            -1 => 4,
            2 => 3.5,
            -2 => 3,
            3 => 2.5,
            -3 => 2,
            4 => 1.5,
            -4 => 1
        ];

        foreach ($resultsGAP as $dosenId => $gapValues) {

            foreach ($gapValues as $key => $gap) {
                $normalizedValues[$key] = $conversionTable[$gap] ?? 1;
            }

            $normalizedGAP[$dosenId] = $normalizedValues;
        }

        return $normalizedGAP;
    }

    private function factorValue($normalizedGAP) {
        $resultsFactor = [];

        foreach ($normalizedGAP as $dosenId => $gapValues) {
            $dataAspek = Aspek::all();
            $aspek = [];

            foreach ($dataAspek as $aspekValue) {
                $aspekId = $aspekValue->id_aspek;

                $coreValues = 0;
                $secondaryValues = 0;
                $coreCount = 0;
                $secondaryCount = 0;
                $factorValue = [];

                foreach ($gapValues as $kriteria => $values) {
                    $factor = Kriteria::find($kriteria);

                    if ($factor->tipe == 'Core Factor') {
                        if ($aspekId == $factor->id_aspek) {
                            $coreValues += $values;
                            $coreCount++;
                        }
                    } else {
                        if ($aspekId == $factor->id_aspek) {
                            $secondaryValues += $values;
                            $secondaryCount++;
                        }
                    }
                }

                if ($coreCount > 0) {
                    $factorValue['NCF'] = $coreValues / $coreCount;
                }
                if ($secondaryCount > 0) {
                    $factorValue['NSF'] = $secondaryValues / $secondaryCount;
                }

                $aspek[$aspekId] = $factorValue;
            }
            $resultsFactor[$dosenId] = $aspek;
        }

        return $resultsFactor;
    }

    private function totalValue($factorValue)
    {
        $totalValues = [];
        $aspek = [];
        $totalValueFactor = [];
        $bobotCF = 60;
        $bobotSF = 40;

        foreach ($factorValue as $dosenId => $value) {
            foreach ($value as $aspekId => $values) {
                $value = [];

                foreach ($values as $tipeValue => $valueFactor) {
                    if ($tipeValue == 'NCF') {
                        $value[] = $valueFactor * $bobotCF / 100;
                    } else {
                        $value[] = $valueFactor * $bobotSF / 100;
                    }
                }
                $totalValueFactor = array_sum($value);
                $aspek[$aspekId] = $totalValueFactor;
            }
            $totalValues[$dosenId] = $aspek;
        }

        return $totalValues;
    }

    private function rankAlternatif($totalValues)
    {
        $rankedResults = [];

        foreach ($totalValues as $dosenId => $totalValue) {
            $ha = 0;

            foreach ($totalValue as $aspekId => $value) {
                $bobotAspek = Aspek::where('id_aspek', $aspekId)->pluck('persentase')->first();
                if ($bobotAspek) {
                    $ha += $value * ($bobotAspek / 100);
                }
            }
            $alternatif = Alternatif::where('id_alternatif', $dosenId)->first();

            $rankedResults[] = [
                'dosenId' => $alternatif->id_alternatif,
                'dosenName' => $alternatif->name,
                'hasilAkhir' => $ha,
            ];
        }

        usort($rankedResults, function ($a, $b) {
            return $b['hasilAkhir'] <=> $a['hasilAkhir'];
        });

        foreach ($rankedResults as $index => &$result) {
            $result['rank'] = $index + 1;
        }

        return $rankedResults;
    }

    public function submit(SubmissionRequest $request)
    {
        try {
            $validated = $request->validated();

            Submissions::create($validated);

            return redirect()->route('results.data')->with('success', 'Pengajuan Judul Berhasil');
            // return view('profile-matching.result');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with(['error' => 'Pengajuan Judul Gagal: ' . $e->getMessage()]);
        }
    }

}