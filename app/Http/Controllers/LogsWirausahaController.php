<?php

namespace App\Http\Controllers;

use App\Models\logs_wirausaha;
use Illuminate\Http\Request;

class LogsWirausahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(logs_wirausaha $logs_wirausaha)
    {
        //
        $data = [
            'logs_wirausaha'=> $logs_wirausaha->all()
        ];
        return view('logs_wirausaha.index',$data);
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
    public function show(logs_wirausaha $logs_wirausaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(logs_wirausaha $logs_wirausaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, logs_wirausaha $logs_wirausaha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(logs_wirausaha $logs_wirausaha)
    {
        //
    }
}