<?php

namespace App\Http\Controllers;

use App\Models\tkaprog;
use App\Models\takun;
use Illuminate\Http\Request;

class TkaprogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(tkaprog $kaprog)
    {
        $data = [
            'kaprog' => $kaprog->all()
        ];
        return view('data_kaprog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(tkaprog $kaprog, takun $takun)
    {
        $data = [
            'takun' => $takun->all(),
        ];
        return view('data_kaprog.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_akun' => ['required'],
            'id_jurusan' => ['required'],
            'nama_kaprog' => ['required'],
            'email' => ['required'],
        ]);

        if($data)
        {
            if(tkaprog::create($data))
            {
                return redirect('/kaprog')->with('success', 'Data Berhasil di Update');
            }else
            {
                return back()->with('error','Data  gagal di update');
            }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(tkaprog $tkaprog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tkaprog $tkaprog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tkaprog $tkaprog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tkaprog $tkaprog)
    {
        //
    }
}
