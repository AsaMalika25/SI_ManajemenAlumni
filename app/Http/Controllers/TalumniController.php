<?php

namespace App\Http\Controllers;

use App\Models\talumni;
use Illuminate\Http\Request;

class TalumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(talumni $talumni)
    {
        
        return view('data_alumni.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data_alumni.tambah');
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
    public function show(talumni $talumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(talumni $talumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, talumni $talumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(talumni $talumni)
    {
        //
    }
}
