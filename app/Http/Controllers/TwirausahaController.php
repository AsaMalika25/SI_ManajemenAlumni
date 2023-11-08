<?php

namespace App\Http\Controllers;

use App\Models\talumni;
use App\Models\twirausaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TwirausahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
      public function index(twirausaha $tusaha)
    {
  
        //store function
        $totalwirausaha = DB::select('SELECT wirausaha() AS totalwirausaha')[0]->totalwirausaha;
        $data = [
            'tusaha'=> $tusaha->all(),
            'jumlahwirausaha'=>$totalwirausaha
        ];
        return view('wirausaha.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(talumni $talumni)
    {
        // $data = $talumni
        //     ->join('twirausaha', 'talumni.id_alumni', '=', 'twirausaha.id_alumni')
        //     ->first();

        $data = [
            'alumni'=>$talumni->all()
        ];
        // dd($usaha);
        return view('wirausaha.tambah',$data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, twirausaha $tusaha)
    {
        $id_alumni = $request->input('id_alumnni'); 

        /*array untuk memvalidasi data yang diterima dari permintaan.
         Validasi memastikan bahwa nama_usaha, bidang, id_alumni, dan gambar_usaha harus di isi*/
        $data = $request->validate([
            'nama_usaha' => ['required'],  
            'bidang' => ['required'],
            'id_alumni' => ['required'],
            'gambar_usaha' => ['required'],
        ]);
   
        if($data)
        {
            if($request->hasFile('gambar_usaha')) 
            {
                $foto_gambar_usaha = $request->file('gambar_usaha');
                $foto_nama = md5($foto_gambar_usaha->getClientOriginalName() . time()) . '.' . $foto_gambar_usaha->getClientOriginalExtension();
                $foto_gambar_usaha->move(public_path('foto'), $foto_nama);
                $data['gambar_usaha'] = $foto_nama;
            }

            if(twirausaha::create($data))
            {
                return redirect('/wirausaha')->with('success', 'Data Berhasil di Update');
            }else
            {
                return back()->with('error','Data  gagal di update');
            }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(twirausaha $tusaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(twirausaha $tusaha, Request $request, string $id)
    {
        // 
        $tusaha = twirausaha::where('id_wirausaha',$id)->first();

        if ($tusaha){

            return view('wirausaha.edit')->with(['twirausaha' => $tusaha]);
        }   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, twirausaha $tusaha)
    {
        $data = $request->validate(
            [
            'nama_usaha' => ['required'],
            'bidang' => ['required'],
            'gambar_usaha' => ['sometimes'],
            'id_wirausaha' => ['required'],
            ]
        );

        if($data)
        {
            if($request->hasFile('gambar_usaha')) {
                $foto_gambar_usaha = $request->file('gambar_usaha');
                $foto_nama = md5($foto_gambar_usaha->getClientOriginalName() . time()) . '.' . $foto_gambar_usaha->getClientOriginalExtension();  
                $foto_gambar_usaha->move(public_path('foto'), $foto_nama);
                $update_data = $tusaha->where('id_wirausaha', $request->input('id_wirausaha'))->first();
                File::delete(public_path('foto').'/'.$update_data->file);
                $data['gambar_usaha'] = $foto_nama;
            }
            twirausaha::where('id_wirausaha', $request->input('id_wirausaha'))->update($data);
            return redirect('/wirausaha')->with('success', ' Berhasil di Update');
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
        
        // $id_wirausaha = $request->input('id_wirausaha');


        // Hapus
        $aksi = twirausaha::where('id_wirausaha', $id)->first();


        if ($aksi) {
            $aksi->delete();
            // Pesan Berhasil
            // $pesan = [
            //     'success' => true,
            //     'pesan'   => 'Data akun berhasil dihapus'
            // ];
            return redirect("wirausaha")->with('success','data berhasill dihapus');
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


