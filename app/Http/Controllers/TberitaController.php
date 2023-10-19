<?php

namespace App\Http\Controllers;

use App\Models\tberita;
use Illuminate\Http\Request;

class TberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'data_alumni' => $data_alumni->all()
        ];
        return view('data_alumni.index', $data);
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
    public function show(tberita $tberita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tberita $tberita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tberita $tberita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tberita $tberita)
    {
        //
    }
}
