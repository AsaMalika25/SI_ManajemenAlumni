<?php

namespace App\Http\Controllers;

use App\Models\tkerja;
use App\Models\talumni;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TkerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(tkerja $tkerja, talumni $talumni )
    {
        //
        $data = [
            'alumni' => DB::table('tkerja')
            ->join('talumni', 'tkerja.id_alumni', '=', 'talumni.id_alumni')
            ->select('talumni.nama', 'tkerja.*')->get(),
        ];
        // dd($data);

        return view('kerja.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(talumni $a)
    {
        // $data = $tkerja
        //     ->join('tkerja', 'tkerja.id_alumni', '=', 'tkerja.id_alumni')
        //     ->first();

        $data = [
            'alumni'=>$a->all()
        ];
        // dd($usaha);
        return view('kerja.tambah',$data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, tkerja $tkerja)
    {

        /*array untuk memvalidasi data yang diterima dari permintaan.
         Validasi memastikan bahwa nama_usaha, bidang, id_alumni, dan gambar_usaha harus di isi*/
        $data = $request->validate([
            'instansi' => ['required'],  
            'id_alumni' => ['required'],  
            'jabatan' => ['required'],
        ]);
   
        if($data)
        {
            if(tkerja::create($data))
            {
                return redirect('/kerja')->with('success', 'Data Berhasil di Update');
            }else
            {
                return back()->with('error','Data  gagal di update');
            }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(tkerja $tkerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tkerja $tkerja, Request $request, string $id, talumni $a)
    {
        // 
        $tkerja = tkerja::where('id_kerja',$id)->first();
        $alumni = $a->all();

        if ($tkerja){

            return view('kerja.edit')->with(['tkerja' => $tkerja, 'alumni'=> $alumni]);
        }   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tkerja $tkerja)
    {
        $data = $request->validate(
            [
            'instansi' => ['required'],  
            'id_alumni' => ['required'],  
            'jabatan' => ['required'],
            ]
        );

        if($data)
        {
           
            tkerja::where('id_kerja', $request->input('id_kerja'))->update($data);
            return redirect('/kerja')->with('success', ' Berhasil di Update');
        }else 
        {
            return back()->with('error','Data  gagal di update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request)
    {
        //
        
        // $id_kerja = $request->input('id_kerja');


        // Hapus
        $aksi = tkerja::where('id_kerja', $id)->first();


        if ($aksi) {
            $aksi->delete();
            // Pesan Berhasil
            // $pesan = [
            //     'success' => true,
            //     'pesan'   => 'Data akun berhasil dihapus'
            // ];
            return redirect("kerja")->with('success','data berhasill dihapus');
        } else {
            // Pesan Gagal
            // $pesan = [
            //     'success' => false,
            //     'pesan'   => 'Data gagal dihapus'
            // ];
            return redirect()->back();
        }


        // return response()->json($pesan);
        }

    }


