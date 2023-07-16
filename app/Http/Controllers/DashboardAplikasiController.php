<?php

namespace App\Http\Controllers;

use App\Models\aplikasi;
use Illuminate\Http\Request;

class DashboardAplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $aplikasis = aplikasi::all();
        // return view('dashboard.dashboard', ['aplikasi' => $aplikasis]);
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
    public function show($id)
    {
        $aplikasis = aplikasi::find($id);
        return view('dashboard.show', compact('dashboard'));
        // return view('dashboard.show', ['aplikasi' => $aplikasis]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aplikasi $aplikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, aplikasi $aplikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aplikasi $aplikasi)
    {
        //
    }
}
