<?php

namespace App\Http\Controllers;

use App\Models\takun;
use App\Models\talumni;
use App\Models\tangkatan;
use App\Models\tjurusan;
use App\Models\tkelas;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class TalumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(talumni $talumni)
    {
        $data =[
              
            'alumni' => DB::table('talumni')
            ->orderBy('id_alumni','desc')
            ->get(),

            'kelas' => DB::table('talumni')
            ->join('tkelas', 'talumni.id_alumni', '=', 'tkelas.id_kelas')
            // ->select('tkelas.*', 'tjurusan.nama_jurusan')
            ->get(),

            'angkatan' => DB::table('talumni')
            ->join('tangkatan', 'talumni.id_alumni', '=', 'tangkatan.id_angkatan')
            // ->select('tkelas.*', 'tangkatan.no_angkatan')
            ->get(),

            'akun' => DB::table('talumni')
            ->join('takun', 'talumni.id_alumni', '=', 'takun.id_akun')
            // ->select('tkelas.*', 'tangkatan.no_angkatan')
            ->get()
        ];

        // dd($data);
        
        return view('data_alumni.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(tangkatan $tangkatan, takun $takun, tkelas $tkelas)
    {
        $angkatan = $tangkatan->all();
        $akun = $takun->all();
        $kelas = $tkelas->all();

        return view('data_alumni.tambah', [
            'angkatan' => $angkatan,
            'kelas' => $kelas,
            'akun' => $akun,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, talumni $talumni)
    {
        $data = $request->validate([
            'nama' => ['required'],
            'email' => ['required'],
            'tgl_lahir' => ['required'],
            'sosmed' => ['required'],
            'id_angkatan' => ['required'],
            'ijazah' => ['required'],
            'no_telp' => ['required'],
            'id_akun' => ['required'],
            'alamat' => ['required'],
            'id_kelas' => ['required'],
            'jenkel' => ['required'],
        ]);

        if ($request->hasFile('ijazah')) {
            $foto_file = $request->file('ijazah');
            $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('foto'), $foto_nama);
            $data['ijazah'] = $foto_nama;
        }

        if ($talumni->create($data)) {
            return redirect ('alumni')->with('success','your added data alumni');
        }else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(talumni $talumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tangkatan $tangkatan, takun $takun, tkelas $tkelas,$id)
    {
        $alumni = talumni::where('id_alumni',$id)->first();
        $angkatan = $tangkatan->all();
        $akun = $takun->all();
        $kelas = $tkelas->all();

        return view('data_alumni.edit', [
            'alumni' => $alumni,
            'angkatan' => $angkatan,
            'kelas' => $kelas,
            'akun' => $akun,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, talumni $talumni)
    {
        $id_alumni = $request->input('id_alumni');

        $data = $request->validate([
            'nama' => ['required'],
            'email' => ['required'],
            'tgl_lahir' => ['required'],
            'sosmed' => ['required'],
            'id_angkatan' => ['required'],
            'ijazah' => ['required'],
            'no_telp' => ['required'],
            'id_akun' => ['required'],
            'alamat' => ['required'],
            'id_kelas' => ['required'],
            'jenkel' => ['required'],
        ]);

        if ($data !== null) {
            if ($request->hasFile('ijazah')) {
                $foto_file = $request->file('ijazah');
                $foto_extension = $foto_file->getClientOriginalExtension();
                $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_extension;
                $foto_file->move(public_path('foto'), $foto_nama);

                $update_data = $talumni->where('id_alumni', $id_alumni)->first();
                File::delete(public_path('foto') . '/' . $update_data->ijazah);

                $data['ijazah'] = $foto_nama;
            }

            $dataUpdate = $talumni->where('id_alumni', $id_alumni)->update($data);

            if ($dataUpdate) {
                return redirect('alumni')->with('success', 'Data alumni has your update');
            }else {
                return back()->with('error', 'Data alumni does not update');
            }

            
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(talumni $talumni, Request $request)
    {
        $id_alumni = $request->input('id_alumni');
        $data = talumni::find($id_alumni);

        if (!$data) {
            return response()->json(['success' => false, 'pesan' => 'Data tidak ditemukan'], 404);
        }

        $filePath = public_path('foto') . '/' . $data->ijazah;
        
        if (file_exists($filePath) && unlink($filePath)) {
            $data->delete();
            return response()->json(['success' => true]);
        } 

        return response()->json(['success' => false, 'pesan' => 'Data gagal dihapus']);
    }
    }
