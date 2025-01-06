<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kriteria\KriteriaRequest;
use App\Models\Aspek;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['kriteria'] = Kriteria::all();

        return view('pages.kriteria.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['aspek'] = Aspek::all();
        return view('pages.kriteria.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KriteriaRequest $request)
    {
        try {
            $validated = $request->validated();

            Kriteria::create($validated);

            return redirect()->route('kriteria.index')->with('success', 'Data Berhasil Ditambah');
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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['kriteria'] = Kriteria::find($id);
        $data['aspek'] = Aspek::all();

        return view('pages.kriteria.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KriteriaRequest $request, string $id)
    {
        try {
            $validated = $request->validated();

            Kriteria::find($id)->update($validated);

            return redirect()->route('kriteria.index')->with('success', 'Data Berhasil Diperbarui');
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return back()->with(['error' => 'Gagal Mengubah Data: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Kriteria::find($id)->delete();
            return redirect()->route('kriteria.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with(['error' => 'Gagal Menghapus Data: ' . $e->getMessage()]);
        }
    }
}