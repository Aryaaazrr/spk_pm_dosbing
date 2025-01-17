<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\ProfileMethod;
use App\Models\Submissions;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
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