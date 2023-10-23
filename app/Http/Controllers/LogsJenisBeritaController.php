<?php

namespace App\Http\Controllers;

use App\Models\logsJenisBerita;
use Illuminate\Http\Request;

class LogsJenisBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(logsJenisBerita $logsJenisBerita)
    {
        //
        $data = [
            'log_jenis_berita'=> $logsJenisBerita->all()
        ];
        return view('log_jenis_berita.index',$data);
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
    public function show(logsJenisBerita $logsJenisBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(logsJenisBerita $logsJenisBerita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, logsJenisBerita $logsJenisBerita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(logsJenisBerita $logsJenisBerita)
    {
        //
    }
}
