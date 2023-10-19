<?php

namespace App\Http\Controllers;

use App\Models\talumni;
use App\Models\tjenis_berita;
use App\Models\tberita;
use Illuminate\Http\Request;

class TberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(tberita $data_berita)
    {
        $data = [
            'data_berita' => $data_berita->all()
        ];
        return view('data_berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data_berita.tambah');
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
