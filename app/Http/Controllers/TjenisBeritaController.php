<?php

namespace App\Http\Controllers;

use App\Models\tjenis_berita;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TjenisBeritaController extends Controller
{   
    /**
     * Display a listing of the resource.
     */
    public function index(tjenis_berita $jenis )
    {
        //pemanggilan store function
        $totalJenisBerita = DB::select('SELECT jenisBerita() AS totalJenisBerita')[0]->totalJenisBerita;
        $data = [
            'jenis_berita'=> $jenis->all(),
            'jumlahJenisBerita'=>$totalJenisBerita
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
                // 'id_jenis_berita' => ['required'], 
                'jenis_berita' => ['required'],
            ]
        );
        if(DB::statement("CALL CreateJenisBerita(?)", [$data['jenis_berita']])):
        // Simpan jika data terisi semua
    //    $jenis_berita->create($data);
            
            return redirect('/jenis_berita')->with('succes','data jenis berita berhasil ditambah');
        else:
        // Kembali ke form tambah data
            return back()->with('error','Data jenis berita gagal ditambahkan');
        endif;


        
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
    public function edit(tjenis_berita $jenis_berita, Request $request)
    {
        // $data = [
        //     'jenis_berita' => $jenis->all()
        // ];
        // return view('jenis_berita.edit', $data);
        $jenis_berita = tjenis_berita::where('id_jenis_berita', $request->id)->first();

        if ($jenis_berita) {
            return view('jenis_berita.edit')->with(['jenis_berita' => $jenis_berita]);
        }
          
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tjenis_berita $tjenis_berita)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request)
    {
        $id_jenis_berita = $request->input('id_jenis_berita');
        $data = tjenis_berita::find($id_jenis_berita);

        if (!$data) {
            
            return response()->json(['success' => false, 'pesan' => 'Data tidak ditemukan'], 404);
        }
        
        if ($data) {
            $data->delete();
            
            return response()->json(['success' => true]);
        }
    }
}
