<?php

namespace App\Http\Controllers;

use App\Models\tkuliah;
use Illuminate\Http\Request;

class TkuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(tkuliah $tkuliah)
    {
        $data = [
            'tkuliah' => $tkuliah->all()
        ];
        return view('data_kuliah.index', $data);
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
    public function show(tkuliah $tkuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tkuliah $tkuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tkuliah $tkuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tkuliah $tkuliah)
    {
        //
    }
}
