<?php

namespace App\Http\Controllers;

use App\Models\talumni;
use App\Models\tkuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TkuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(tkuliah $tkuliah, talumni $talumni)
    {
        $data = [
            'alumni' => DB::table('tkuliah')
            ->join('talumni', 'tkuliah.id_alumni', '=', 'talumni.id_alumni')
            ->select('talumni.nama', 'tkuliah.*')->get(),
        ];
        // dd($data);

        return view('kuliah.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(talumni $a)
    {
        // $data = $tkuliah
        //     ->join('tkuliah', 'tkuliah.id_alumni', '=', 'tkuliah.id_alumni')
        //     ->first();

        $data = [
            'alumni'=>$a->all()
        ];
        // dd($usaha);
        return view('kuliah.tambah',$data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, tkuliah $tkuliah)
    {

        /*array untuk memvalidasi data yang diterima dari permintaan.
         Validasi memastikan bahwa nama_usaha, bidang, id_alumni, dan gambar_usaha harus di isi*/
        $data = $request->validate([
            'nama_lembaga' => ['required'],  
            'id_alumni' => ['required'],  
            'jurusan_kuliah' => ['required'],
        ]);
   
        if($data)
        {
            if(tkuliah::create($data))
            {
                return redirect('/kuliah')->with('success', 'Data Berhasil di Update');
            }else
            {
                return back()->with('error','Data  gagal di update');
            }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(tkuliah $tkuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tkuliah $tkuliah, Request $request, string $id, talumni $a)
    {
        // 
        $tkuliah = tkuliah::where('id_kuliah',$id)->first();
        $alumni = $a->all();

        if ($tkuliah){

            return view('kuliah.edit')->with(['tkuliah' => $tkuliah, 'alumni'=> $alumni]);
        }   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tkuliah $tkuliah)
    {
        $data = $request->validate(
            [
                'nama_lembaga' => ['required'],  
                'id_alumni' => ['required'],  
                'jurusan_kuliah' => ['required'],
            ]
        );

        if($data)
        {
           
            tkuliah::where('id_kuliah', $request->input('id_kuliah'))->update($data);
            return redirect('/kuliah')->with('success', ' Berhasil di Update');
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
        // $aksi = tkuliah::where('id_kuliah', $id)->first();
        // if ($aksi) {
        //     $aksi->delete();
        //     // Pesan Berhasil
        //     // $pesan = [
        //     //     'success' => true,
        //     //     'pesan'   => 'Data akun berhasil dihapus'
        //     // ];
        //     return redirect("kuliah")->with('success','data berhasill dihapus');
        // } else {
        //     // Pesan Gagal
        //     // $pesan = [
        //     //     'success' => false,
        //     //     'pesan'   => 'Data gagal dihapus'
        //     // ];
        //     return redirect()->back();
        // }
        $id_kuliah = $request->input('id_kuliah');
        $data = tkuliah::find($id_kuliah);

        if (!$data) {
            return response()->json(['success' => false, 'pesan' => 'Data tidak ditemukan'], 404);
        }
        
        if ($data) {
            $data->delete();
            return response()->json(['success' => true]);
        }
        }

    }


