<?php

namespace App\Http\Controllers;

use App\Models\tangkatan;
use App\Models\tjurusan;
use App\Models\tkelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TkelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(tkelas $tkelas)
    {
        $data =[
              
            'kelas' => DB::table('tkelas')
            ->orderBy('id_kelas','desc')
            ->get(),

            'jurusan' => DB::table('tkelas')
            ->join('tjurusan', 'tkelas.id_kelas', '=', 'tjurusan.id_jurusan')
            // ->select('tkelas.*', 'tjurusan.nama_jurusan')
            ->get(),

            'angkatan' => DB::table('tkelas')
            ->join('tangkatan', 'tkelas.id_kelas', '=', 'tangkatan.id_angkatan')
            // ->select('tkelas.*', 'tangkatan.no_angkatan')
            ->get()
        ];

        // dd($data);
        
        return view('kelas.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(tangkatan $tangkatan, tjurusan $tjurusan)
    {
        $angkatan = $tangkatan->all();
        $jurusan = $tjurusan->all();

        return view('kelas.tambah', [
            'jurusan' => $jurusan,
            'angkatan' => $angkatan,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, tkelas $tkelas)
    {
        $data = $request->validate([
            'nama_kelas' => ['required'],
            'id_jurusan' => ['required'],
            'id_angkatan' => ['required'],
        ]);
        
        if ($data) {
            // Simpan jika data terisi semua
            $tkelas->create($data);
            return redirect('kelas')->with('success', 'Data jenis surat baru berhasil ditambah');
        }else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(tkelas $tkelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tkelas $tkelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tkelas $tkelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tkelas $tkelas)
    {
        //
    }
}
