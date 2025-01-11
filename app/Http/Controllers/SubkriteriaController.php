<?php

namespace App\Http\Controllers;

use App\Http\Requests\Subkriteria\SubkriteriaRequest;
use App\Models\Kriteria;
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
    public function create()
    {
        $data['kriteria'] = Kriteria::all();

        return view('pages.subkriteria.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubkriteriaRequest $request)
    {
        try {
            $validated = $request->validated();

            Subkriteria::create($validated);

            return redirect()->route('subkriteria.index')->with('success', 'Data Berhasil Ditambah');
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
        $data['subkriteria'] = Subkriteria::find($id);
        $data['kriteria'] = Kriteria::all();

        return view('pages.subkriteria.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubkriteriaRequest $request, string $id)
    {
        try {
            $validated = $request->validated();

            Subkriteria::find($id)->update($validated);

            return redirect()->route('subkriteria.index')->with('success', 'Data Berhasil Diperbarui');
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
            Subkriteria::find($id)->delete();
            return redirect()->route('subkriteria.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with(['error' => 'Gagal Menghapus Data: ' . $e->getMessage()]);
        }
    }
}
