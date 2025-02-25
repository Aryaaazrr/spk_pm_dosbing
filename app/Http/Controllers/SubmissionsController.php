<?php

namespace App\Http\Controllers;

use App\Http\Requests\Submission\SubmissionRequest;
use App\Models\Alternatif;
use App\Models\IzinPemilihan;
use App\Models\Kriteria;
use App\Models\ProfileMethod;
use App\Models\SubmissionDetail;
use App\Models\Submissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SubmissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['submission'] = Submissions::with(['submission_detail' ,'users'])->get();
        $data['submission_detail'] = SubmissionDetail::with('alternatif')->get();
        $data['profile'] = ProfileMethod::with(['alternatif', 'kriteria', 'subkriteria'])->get();
        $data['kriteria'] = Kriteria::with('subkriteria')->get();
        $data['izin'] = IzinPemilihan::first();

        return view('pages.submissions.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['alternatif'] = Alternatif::all();
        $data['izin'] = IzinPemilihan::first();

        return view('pages.submissions.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubmissionRequest $request)
    {
        DB::beginTransaction();
        try {
            $validatedSubmission = $request->validated();

            $submission = Submissions::create([
                'id' => $validatedSubmission['id'],
                'judul' => $validatedSubmission['judul'],
                'deskripsi' => $validatedSubmission['deskripsi'],
                'prodi' => $validatedSubmission['prodi'],
                'angkatan' => $validatedSubmission['angkatan'],
            ]);

            SubmissionDetail::create([
                'id_submission' => $submission->id_submission,
                'id_alternatif' => $validatedSubmission['id_alternatif'],
            ]);

            DB::commit();

            return redirect()->route('submissions.create')->with('success', 'Pengajuan Berhasil');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());

            return back()->withErrors(['error' => 'Pengajuan Gagal: Formulir wajib diisi!']);
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