<?php

namespace App\Http\Controllers;

use Exception;
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

        $totalKelas = DB::select('SELECT CountNamaKelas() AS totalKelas')[0]->totalKelas;

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
            ->get(),

            'jumlahKelas' => $totalKelas
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
        
        // dd($data);
        DB::beginTransaction();
        try {
            $kelasId = $tkelas->create($data)->id_kelas;
            DB::statement("CALL Createkelas(?, ?, ?)", [$data['id_jurusan'], $data['id_angkatan'], $data['nama_kelas']]);
            DB::commit();
            return redirect('kelas')->with('success','data kamu berhasil ditambahkan');
        } catch (Exception $e) {
            // $e->getMessage();
            dd($e->getMessage());
            DB::rollback();
            return back()->with('error', 'Data siswa gagal ditambahkan');
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
    public function edit(tangkatan $tangkatan, tjurusan $tjurusan, $id)
    {
        $kelas = tkelas::where('id_kelas',$id)->first();
        $angkatan = $tangkatan->all();
        $jurusan = $tjurusan->all();

        return view('kelas.edit', [
            'jurusan' => $jurusan,
            'angkatan' => $angkatan,
            'kelas' => $kelas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tkelas $tkelas)
    {
        
        $data = $request->validate([
            'nama_kelas' => ['required'],
            'id_jurusan' => ['required'],
            'id_angkatan' => ['required'],
        ]);

        if($request->input('id_kelas') !== null ){
            //Proses Update
            $dataUpdate = tkelas::where('id_kelas',$request->input('id_kelas'))
            ->update($data);
        if($dataUpdate){
            return redirect('/kelas')->with('success', 'kelas Berhasil di Update');
        }else{
        return back()->with('error','Data kelas gagal di update');
        }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tkelas $tkelas)
    {
        //
    }
}
