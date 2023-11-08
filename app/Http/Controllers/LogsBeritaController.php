<?php

namespace App\Http\Controllers;

use App\Models\logsBerita;
use Illuminate\Http\Request;

class LogsBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(logsBerita $logsBerita)
    {
        //
        $data = [
            'log_berita'=> $logsBerita->all()
        ];
        return view('log_berita.index',$data);
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
    public function show(logsBerita $logsBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(logsBerita $logsBerita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, logsBerita $logsBerita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(logsBerita $logsBerita)
    {
        //
    }
}
