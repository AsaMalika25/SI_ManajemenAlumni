<?php

namespace App\Http\Controllers;

use App\Models\tangkatan;
use Illuminate\Http\Request;

class TangkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(tangkatan $tangkatan)
    {
        $data = [
            'tangkatan' => $tangkatan->all(),
        ];
        return view('angkatan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('angkatan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, tangkatan $tangkatan)
    {
        $data = $request->validate([
            'no_angkatan' => ['required'],
            'tahun_masuk' => ['required'],
            'tahun_keluar' => ['required'],
        ]);
        
        if ($data) {
            // Simpan jika data terisi semua
            $tangkatan->create($data);
            return redirect('angkatan')->with('success', 'Data jenis surat baru berhasil ditambah');
        }else {
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(tangkatan $tangkatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit_angkatan = tangkatan::where('id_angkatan', $id)->first();

        if ($edit_angkatan) {
            return view('angkatan.edit',compact('edit_angkatan'));
        }else {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_angkatan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
        ]);

        $update_angkatan = [
            'no_angkatan' => $request->input('no_angkatan'),
            'tahun_masuk' => $request->input('tahun_masuk'),
            'tahun_keluar' => $request->input('tahun_keluar'),
        ];

        if ($update_angkatan) {
        tangkatan::where('id_angkatan', $id)->update($update_angkatan);

        return redirect()->to('angkatan')->with('success','berhasil menambahkan data');

        }else {
            return redirect()->back();
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tangkatan $tangkatan, Request $request)
    {
        $id_angkatan = $request->input('id_angkatan');

        // Hapus 
        $aksi = $tangkatan->where('id_angkatan', $id_angkatan)->delete();

        if ($aksi) {
            // Pesan Berhasil
            $pesan = [
                'success' => true,
                'pesan'   => 'Data jenis surat berhasil dihapus'
            ];
        } else {
            // Pesan Gagal
            $pesan = [
                'success' => false,
                'pesan'   => 'Data gagal dihapus'
            ];
        }

        return response()->json($pesan);
    }
}
