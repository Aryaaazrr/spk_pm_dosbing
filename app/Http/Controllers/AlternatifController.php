<?php

namespace App\Http\Controllers;

use App\Http\Requests\Alternatif\AlternatifRequest;
use App\Models\Alternatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['alternatif'] = Alternatif::all();

        return view('pages.alternatif.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.alternatif.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlternatifRequest $request)
    {
        try {
            $validated = $request->validated();

            Alternatif::create($validated);

            return redirect()->route('alternatif.index')->with('success', 'Data Berhasil Ditambah');
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
        $data['alternatif'] = Alternatif::find($id);

        return view('pages.alternatif.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlternatifRequest $request, string $id)
    {
        try {
            $validated = $request->validated();

            Alternatif::find($id)->update($validated);

            return redirect()->route('alternatif.index')->with('success', 'Data Berhasil Diperbarui');
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
            Alternatif::find($id)->delete();
            return redirect()->route('alternatif.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with(['error' => 'Gagal Menghapus Data: ' . $e->getMessage()]);
        }
    }
}
