<?php

namespace App\Http\Controllers;

use App\Models\takun;
use Illuminate\Http\Request;

class TakunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Auth.login");
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
    public function show(takun $takun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(takun $takun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, takun $takun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(takun $takun)
    {
        //
    }
}
