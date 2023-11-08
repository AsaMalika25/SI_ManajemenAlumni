<?php

namespace App\Http\Controllers;

use App\Models\talumni;
use App\Models\tjenis_berita;
use App\Models\tberita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(tberita $tberita)
    {
        $data = [
            'tberita' => $tberita->all()
        ];
        return view('data_berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(tjenis_berita $tjenis_berita)
    {
        $data = [
            'tjenis_berita' => $tjenis_berita->all(),
        ];
        return view('data_berita.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, tjenis_berita $tjenis_berita, tberita $tberita )
    {
        /*array untuk mem-validasi data, apakah data sudah sesuai atau belum,
        kemudian data tersebut akan dikirim dan diolah lebih lanjut*/
        $data = $request->validate([
            'id_jenis_berita' => ['required'],
            'judul_berita' => ['required'],
            'tgl_post' => ['required'],
            'kode_berita' => ['required'],
            'ket_berita' => ['required'],
            'file' => ['required'], 
        ]);

        if($data)
        {
        if($request->hasFile('file') && $request->file('file')->isValid())
        {
            $foto_file = $request->file('file');
            $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('foto'), $foto_nama);
            $data['file'] = $foto_nama;
        }

            if(tberita::create($data))
            {
                return redirect('/berita')->with('success', 'Berita Berhasil di tambah');
            }else
            {
                return back()->with('error','Data berita gagal di update');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(tberita $tberita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tberita $tberita, Request $request, tjenis_berita $tjenis_berita)
    {
        $data = [
            'tberita' => tberita::where('id_berita', $request->id)->first(),
            'tjenis_berita' => $tjenis_berita->all()
        ];
        return view('data_berita.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tberita $tberita )
    {
        $data = $request->validate(
        [
            'id_jenis_berita' => ['required'],
            'judul_berita' => ['required'],
            'tgl_post' => ['required'],
            'kode_berita' => ['required'],
            'ket_berita' => ['required'],
            'file' => ['sometimes'], 
        ]);

        if($data)
        {
            if($request->hasFile('file')) {
                $foto_file = $request->file('file');
                $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_file->getClientOriginalExtension();
                $foto_file->move(public_path('foto'), $foto_nama);
                $update_data = $tberita->where('id_berita', $request->input('id_berita'))->first();
                File::delete(public_path('foto').'/'.$update_data->file);
                $data['file'] = $foto_nama;
            }
            tberita::where('id_berita', $request->input('id_berita'))->update($data);
            return redirect('/berita')->with('success', 'berita Berhasil di Update');
        }else 
        {
            return back()->with('error','Data berita gagal di update');
        }   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request, tberita $tberita)
    {
        $id_berita = $request->input('id_berita');
        $data = tberita::find($id_berita);

        if (!$data) {
            return response()->json(['success' => false, 'pesan' => 'Data tidak ditemukan'], 404);
        }

        $filePath = public_path('foto') . '/' . $data->file;

            $data->delete();
            return response()->json(['success' => true]);
    }
}
