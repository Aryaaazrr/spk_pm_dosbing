<?php

namespace App\Http\Controllers;

use App\Http\Requests\Subkriteria\SubkriteriaRequest;
use App\Models\Kriteria;
use App\Models\Nilai;
use App\Models\Subkriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubkriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['subkriteria'] = Subkriteria::all();

        return view('pages.subkriteria.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Kriteria $kriteria)
    {
        $count = Subkriteria::where('id_kriteria', $kriteria->id_kriteria)->count();

        if ($count >= 5) {
            return redirect()->route('kriteria.edit', $kriteria)->withErrors(['Kriteria ' . $kriteria->kriteria_name .' sudah memiliki subkriteria maksimal 5']);
        }

        $data['kriteria'] = $kriteria;
        $data['nilai'] = Nilai::all();

        return view('pages.subkriteria.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubkriteriaRequest $request, $kriteria)
    {
        try {
            $validated = $request->validated();

            Subkriteria::create($validated);

            return redirect()->route('kriteria.edit', $kriteria)->with('success', 'Data Berhasil Ditambah');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with(['error' => 'Gagal Menambahkan Data: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria, Subkriteria $subkriteria)
    {
        $data['subkriteria'] = $subkriteria;
        $data['kriteria'] = $kriteria;
        $data['nilai'] = Nilai::all();

        return view('pages.subkriteria.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kriteria $kriteria, Subkriteria $subkriteria)
    {
        $data['subkriteria'] = $subkriteria;
        $data['kriteria'] = $kriteria;
        $data['nilai'] = Nilai::all();

        return view('pages.subkriteria.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubkriteriaRequest $request, $kriteria, $subkriteria)
    {
        try {
            $validated = $request->validated();

            Subkriteria::find($subkriteria)->update($validated);

            return redirect()->route('kriteria.edit', $kriteria)->with('success', 'Data Berhasil Diperbarui');
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return back()->with(['error' => 'Gagal Mengubah Data: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kriteria, $subkriteria)
    {
        try {
            Subkriteria::find($subkriteria)->delete();

            return redirect()->route('kriteria.edit', $kriteria)->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with(['error' => 'Gagal Menghapus Data: ' . $e->getMessage()]);
        }
    }
}
