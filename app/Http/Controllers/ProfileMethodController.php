<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileMethod\ProfileMethodRequest;
use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\ProfileMethod;
use App\Models\Subkriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['profile_method'] = ProfileMethod::all();
        $data['kriteria'] = Kriteria::with('subkriteria')->get();

        return view('pages.profile-method.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['alternatif'] = Alternatif::with('profile_method')->whereDoesntHave('profile_method')->get();
        $data['kriteria'] = Kriteria::all();
        $data['subkriteria'] = Subkriteria::all();

        return view('pages.profile-method.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfileMethodRequest $request)
    {
        try {
            foreach ($request->kriteria as $id_kriteria => $id_subkriteria) {
                if (is_array($id_subkriteria)) {
                    foreach ($id_subkriteria as $subId) {
                        if ($subId) {
                            ProfileMethod::updateOrCreate(
                                [
                                    'id_alternatif' => $request->id_alternatif,
                                    'id_kriteria' => $id_kriteria,
                                    'id_subkriteria' => $subId,
                                ],
                                []
                            );
                        }
                    }
                } else {
                    if ($id_subkriteria) {
                        ProfileMethod::updateOrCreate(
                            [
                                'id_alternatif' => $request->id_alternatif,
                                'id_kriteria' => $id_kriteria,
                            ],
                            [
                                'id_subkriteria' => $id_subkriteria,
                            ]
                        );
                    }
                }
            }

            return redirect()->route('method-profile.index')->with('success', 'Data Berhasil Ditambah');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with(['error' => 'Gagal Menambahkan Data: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['profile_method'] = ProfileMethod::with('alternatif', 'kriteria', 'subkriteria')
        ->where('id_alternatif', $id)
        ->get();
        $data['alternatif'] = Alternatif::findOrFail($id);
        $data['kriteria'] = Kriteria::all();

        return view('pages.profile-method.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileMethodRequest $request, string $id)
    {
        try {
            foreach ($request->kriteria as $id_kriteria => $id_subkriteria) {
                if (is_array($id_subkriteria)) {
                    // Hapus semua yang tidak termasuk dalam pilihan baru
                    ProfileMethod::where('id_alternatif', $request->id_alternatif)
                        ->where('id_kriteria', $id_kriteria)
                        ->whereNotIn('id_subkriteria', $id_subkriteria)
                        ->delete();

                    foreach ($id_subkriteria as $subId) {
                        if ($subId) {
                            ProfileMethod::updateOrCreate(
                                [
                                    'id_alternatif' => $request->id_alternatif,
                                    'id_kriteria' => $id_kriteria,
                                    'id_subkriteria' => $subId,
                                ],
                                []
                            );
                        }
                    }
                } else {
                    if ($id_subkriteria) {
                        // Update untuk kriteria dengan 1 nilai saja
                        ProfileMethod::updateOrCreate(
                            [
                                'id_alternatif' => $request->id_alternatif,
                                'id_kriteria' => $id_kriteria,
                            ],
                            [
                                'id_subkriteria' => $id_subkriteria,
                            ]
                        );
                    }
                }
            }

            return redirect()->route('method-profile.index')->with('success', 'Data Berhasil Diperbarui');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with(['error' => 'Gagal Memperbarui Data: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $profile_method = ProfileMethod::where('id_alternatif', $id);

            $profile_method->delete();

            return redirect()->route('method-profile.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with(['error' => 'Gagal Menghapus Data: ' . $e->getMessage()]);
        }
    }
}
