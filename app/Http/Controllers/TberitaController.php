<?php

namespace App\Http\Controllers;

use App\Models\talumni;
use App\Models\tjenis_berita;
use App\Models\tberita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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
    public function Berita(tberita $tberita)
    {
        $data = [
            'tberita' => $tberita->where('status','accepted')->get(),
        ];
        
        return view('berita.index', $data);
    }
    public function confirm(tberita $tberita)
    {
        $data = [
            'tberita' => $tberita->where('status','pending')->get()
        ];
        return view('konfirmasi.index', $data);
    }
    public function acc(tberita $tberita, Request $request)
    {
        $data = $request->validate([
            'id_berita' => ['required'],
            'status' => ['required'],
        ]);
        if ($data) {
            $tberita::where('id_berita', $request->input('id_berita'))->update($data);
            
            return redirect()->to('confirm')->with('success');
        }else{
            return abort('404');
        }
        
    }

    public function reject(tberita $tberita, Request $request)
    {
        $data = $request->validate([
            'id_berita' => ['required'],
            'status' => ['required'],
        ]);
        if ($data) {
            $tberita::where('id_berita', $request->input('id_berita'))->update($data);

            return redirect()->to('confirm')->with('success');
        }else{
            return abort('404');
        }
        
    }

    public function cetak_Berita(tberita $tberita)
    {
        $data = [
            'tberita' => $tberita->all()
        ];
        $pdf = Pdf::loadview('berita.Berita_pdf', $data);
    	return $pdf->stream('Berita.pdf');
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
    public function create_berita(tjenis_berita $tjenis_berita)
    {
        $data = [
            'tjenis_berita' => $tjenis_berita->all(),
        ];
        return view('berita.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, tjenis_berita $tjenis_berita, tberita $tberita )
    {

        $data = $request->validate([
            'id_jenis_berita' => ['required'],
            'judul_berita' => ['required'],
            'tgl_post' => ['required'],
            'kode_berita' => ['required'],
            'ket_berita' => ['required'],
            'file' => ['required'], 
        ]);

        $data['ket_berita'] = Str::limit(strip_tags($data['ket_berita']), 200);
        
        if($data)
        {
        if($request->hasFile('file') && $request->file('file')->isValid())
        {
            $foto_file = $request->file('file');
            $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('foto'), $foto_nama);
            $data['file'] = $foto_nama;
        }

            if($tberita->create($data))
            {
                return redirect('berita')->with('success', 'Berita Berhasil di tambah');
            }else
            {
                return back()->with('error','Data berita gagal di update');
            }
        }
    }
    public function store_berita(Request $request, tjenis_berita $tjenis_berita, tberita $tberita )
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
            'status' => ['required'],   
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

            if($tberita->create($data))
            {
                return redirect('berita-alumni')->with('success', 'Berita Berhasil di tambah');
            }else
            {
                return back()->with('error','Data berita gagal di update');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(tberita $tberita, tjenis_berita $tjenis_berita, Request $request)
    {
        // $data = [
        //     'tberita' => DB::table('views_alumni')->where('id_alumni', $id)->first(),
        // ];
        // return view('data_alumni.detail',$data);
        $data = [
            'tberita' => tberita::where('id_berita', $request->id)->first(),
            'tjenis_berita' => $tjenis_berita->all()
        ];

        // dd($data);
        return view('data_berita.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tberita $tberita, Request $request, tjenis_berita $tjenis_berita, )
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
