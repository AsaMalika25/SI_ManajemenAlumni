<?php

namespace App\Http\Controllers;

use App\Models\tjenis_berita;
use Illuminate\Http\Request;

class TjenisBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(tjenis_berita $jenis)
    {
        $data = [
            'jenis_berita' => $jenis->all()
        ];
        return view('jenis_berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis_berita.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, tjenis_berita $jenis_berita)
    {
        $data = $request->validate(
            [
                'id_jenis_berita' => ['required'],
                'jenis_berita' => ['required'],
            ]
        );
        if($request->input('id_jenis_berita') !== null ){
            //Proses Update
            $dataUpdate = tjenis_berita::where('id_jenis_berita',$request->input('id_jenis_berita'))
                            ->update($data);
            if($dataUpdate){
                return redirect('/jenis_berita')->with('success', 'Jenis berita Berhasil di Update');
            }else{
                return back()->with('error','Data Jenis berita gagal di update');
            }
        }
        else{
            //Proses Insert
            if($data):
                // $data['id_jenis_berita'] = 1;
            //Simpan jika data terisi semua
                $jenis_berita->create($data);
                return redirect('/jenis_berita')->with('succes','data jenis berita berhasil ditambah');
            else:
            //Kembali ke form tambah data
                return back()->with('error','Data jenis berita gagal ditambahkan');
            endif;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(tjenis_berita $tjenis_berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tjenis_berita $tjenis_berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tjenis_berita $tjenis_berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tjenis_berita $tjenis_berita)
    {
        //
    }
}
