<?php

namespace App\Http\Controllers;

use App\Models\tjurusan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TjurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(tjurusan $tjurusan)
    {
        $data = [
            'jurusan' => tjurusan::all(),
        ];
        return view("jurusan.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("jurusan.tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, tjurusan $tjurusan)
    {
        $data = $request->validate([
            'nama_jurusan'=> ['required'],
        ]);

        if ($data) {
            
            $tjurusan->create($data);

            return redirect()->to('jurusan')->with('success','you have create data jurusan');

        }else {

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(tjurusan $tjurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tjurusan $tjurusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tjurusan $tjurusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tjurusan $tjurusan)
    {
        //
    }
}
