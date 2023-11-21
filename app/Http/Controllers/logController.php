<?php

namespace App\Http\Controllers;

use App\Models\log;
use Illuminate\Http\Request;

class logController extends Controller
{
    function index(log $logs)
    {
        $data = [
            'log' => $logs::orderBy('id_log', 'desc')->get()
        ];

        return view('log.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('log.tambah');
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
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id_logs = $request->input('id_log');
        // dd($id_logs);
        
        if ($id_logs != null) {
            foreach ($id_logs as $id) {
                log::where('id_log', $id)->delete();
            }
        }
        return redirect()->to('log')->with('success', 'Data berhasil dihapus');
    }
}
