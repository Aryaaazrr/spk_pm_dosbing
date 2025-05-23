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
        // dd($request->all());
        $subkriteria1 = ProfileMethod::where('id_kriteria', 1)
            ->pluck('id_subkriteria')
            ->toArray();

        // $subkriteria2 = ProfileMethod::where('id_kriteria', 2)
        //     ->pluck('id_subkriteria')
        //     ->toArray();

        $countSubkriteria1 = array_count_values($subkriteria1);
        // $countSubkriteria2 = array_count_values($subkriteria2);

        $mostKriteria1 = array_search(max($countSubkriteria1), $countSubkriteria1);
        // $mostKriteria2 = array_search(max($countSubkriteria2), $countSubkriteria2);

        try {
            $validated = $request->validated();

            $selectKriteria = $request->input('kriteria', []);
            $selectedAlternatif = $request->input('alternatif', []);

            $selectKriteria = array_merge([$mostKriteria1, 7], $selectKriteria);
            $selectedKriteria = $selectKriteria;

            $selectedKriteria = array_map(function ($item) {
                return (string) $item;
            }, $selectedKriteria);

            if (empty($selectedKriteria) || empty($selectedAlternatif)) {
                return back()->withErrors('Kriteria dan alternatif harus dipilih.')->withInput();
            }

            Log::info('Selected Kriteria:', ['data' => $selectedKriteria]);
            Log::info('Selected Alternatif:', ['data' => $selectedAlternatif]);

            $data['selectedKriteria'] = $selectedKriteria;
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

            $totalKeahlianUtama = ProfileMethod::with('kriteria')
            ->where('id_alternatif', $dosen->id_alternatif)
            ->whereHas('kriteria', function ($query) {
                $query->where('kriteria_name', 'Keahlian Utama');
            })->count();

            foreach ($kriteria as $subkriteriaId) {
                $idealValue = Subkriteria::with('kriteria')->find($subkriteriaId);
                $idealKriteria = $idealValue->kriteria;

                if ($dosen->kriteria->id_kriteria == $idealKriteria->id_kriteria) {
                    $dosenNilai = optional($dosen->subkriteria->nilai)->value;
                    $idealNilai = optional($idealValue->nilai)->value;

                    $gap = $dosenNilai - $idealNilai;

                    if ($idealKriteria->kriteria_name === 'Keahlian Utama') {
                        if ($totalKeahlianUtama > 1) {
                            if (abs($gap) <= 1) {
                                $gapValues[$idealKriteria->id_kriteria] = $gap;
                            }
                        } else {
                            $gapValues[$idealKriteria->id_kriteria] = $gap;
                        }
                    } else {
                        $gapValues[$idealKriteria->id_kriteria] = $gap;
                    }
                }
            }

            if (!empty($gapValues)) {
                ksort($gapValues);
                $resultsGAP[$dosen->id_alternatif] = $gapValues;
            }
        }
        Log::info('Ideal Value:', ['data' => $idealValue]);
        Log::info('GAP Values:', $resultsGAP);

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

        Log::info('Pemetaan GAP:', $normalizedGAP);

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

        Log::info('NCSF:', $resultsFactor);

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

        Log::info('Nilai Total:', $totalValues);

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

        Log::info('Ranking:', $rankedResults);

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
