<?php

namespace App\Http\Controllers;

use App\Helpers\FormatHelper;
use App\Http\Requests\Aspek\AspekCreateRequest;
use App\Models\Aspek;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Log;

class AspekController extends Controller
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:aspek-read', only: ['index']),
            new Middleware('permission:aspek-create', only: ['create', 'store']),
            new Middleware('permission:aspek-update', only: ['edit', 'update']),
            new Middleware('permission:aspek-delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['aspek'] = Aspek::all();
        return view('pages.aspek.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.aspek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AspekCreateRequest $request)
    {
        try {
            $validated = $request->validated();

            $validated['persentase'] = FormatHelper::formatPersentase($validated['persentase']);

            Aspek::create($validated);

            return redirect()->route('aspek.index')->with('success', 'Data Berhasil Ditambah');
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
        $data['aspek'] = Aspek::find($id);

        return view('pages.aspek.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AspekCreateRequest $request, string $id)
    {
        try {
            $validated = $request->validated();

            $validated['persentase'] = FormatHelper::formatPersentase($validated['persentase']);

            Aspek::find($id)->update($validated);

            return redirect()->route('aspek.index')->with('success', 'Data Berhasil Diperbarui');
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
            Aspek::find($id)->delete();
            return redirect()->route('aspek.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with(['error' => 'Gagal Menghapus Data: ' . $e->getMessage()]);
        }
    }
}