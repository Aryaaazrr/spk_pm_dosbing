<?php

namespace App\Http\Controllers;

use App\Models\IzinPemilihan;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view();
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
        //
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
     * Update the specified resource in storage.
     */
    public function updatePermission(Request $request)
    {
        $request->validate([
            'izin' => 'required|in:on,off' 
        ]);

        $izin = IzinPemilihan::first();
        $izin->izin = $request->izin;
        $izin->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Izin berhasil diperbarui!',
            'izin' => $izin->izin
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}