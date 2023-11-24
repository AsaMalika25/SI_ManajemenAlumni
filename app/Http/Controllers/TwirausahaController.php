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
            'tusaha' => DB::table('views_wirausaha')->get(),
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
    public function edit(twirausaha $tusaha, Request $request, string $id, talumni $talumni)
    {
        // 
        // $tusaha = twirausaha::where('id_wirausaha',$id)->first();
        $data = [
            'tusaha' => DB::table('views_wirausaha')
            ->where('id_wirausaha', $id)
            ->first(),
            'alumni' => $talumni->all()
        ];
        return view('wirausaha.edit',$data);
    }

    public function detail(twirausaha $tusaha, Request $request, $id)
    {
        $data = [
            // 'tusaha'=> $tusaha->where('id_wirausaha', $id)->first(),
            'tusaha' => DB::table('views_wirausaha')
            ->where('id_wirausaha', $id)
            ->first(),
        ];
        return view('wirausaha.detail',$data);
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
            'id_alumni' => ['required'],
            'id_wirausaha' => ['required'],
            ]
        );
        // dd($data);
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
        $id = $request->input('id_wirausaha');
        $data = twirausaha::find($id);

        if (!$data) {
            return response()->json(['success' => false, 'pesan' => 'Data tidak ditemukan'], 404);
        }

        $filePath = public_path('foto') . '/' . $data->file;

            $data->delete();
            return response()->json(['success' => true]);
        }

    }


