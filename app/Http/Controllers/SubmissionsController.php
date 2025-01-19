<?php

namespace App\Http\Controllers;

use App\Http\Requests\Submission\SubmissionRequest;
use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\ProfileMethod;
use App\Models\Submissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubmissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['submission'] = Submissions::all();
        $data['profile'] = ProfileMethod::with(['alternatif', 'kriteria', 'subkriteria'])->get();
        $data['kriteria'] = Kriteria::with('subkriteria')->get();

        return view('pages.submissions.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['alternatif'] = Alternatif::all();
        return view('pages.submissions.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validated();

            Submissions::create($validated);

            return redirect()->route('submissions.index')->with('success', 'Pengajuan Judul Berhasil');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with(['error' => 'Pengajuan Judul Gagal: ' . $e->getMessage()]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}