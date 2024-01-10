<?php

namespace App\Http\Controllers;

use App\Models\tangkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        if(DB::statement("CALL Createangkatan(?,?,?)", [$data['no_angkatan'],$data['tahun_masuk'],$data['tahun_keluar']])):
            // Simpan jika data terisi semua
        //    $tangkatan->create($data);
                return redirect('angkatan')->with('succes','data berhasil ditambah');
            else:
            // Kembali ke form tambah data
                return back()->with('error','Data gagal ditambahkan');
            endif;
        //  DB::beginTransaction();
        // try {
        //     $angkatanId = $angkatan->create($data)->id_angkatan;
        //     DB::statement("CALL Create  ngkatan(?, ?, ?)", [$angkatanId, $data['username'], $data['password']]);
        //     DB::commit();
        //     notify()->success('Data angkatan telah ditambah', 'Success');
        //     return redirect('angkatan');
        // } catch (Exception $e) {
        //     DB::rollback();
        //     return back()->with('error', 'Data angkatan gagal ditambahkan');
        // }

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
    public function update(Request $request, tangkatan $tangkatan)
    {
        $data = $request->validate([
            'no_angkatan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
        ]);

        if($request->input('id_angkatan') !== null ){
            //Proses Update
            $dataUpdate = tangkatan::where('id_angkatan',$request->input('id_angkatan'))
            ->update($data);
        if($dataUpdate){
            
            return redirect('/angkatan')->with('success', 'angkatan Berhasil di Update');
        }else{
        return back()->with('error','Data angkatan gagal di update');
        }

        // $update_angkatan = [
        //     'no_angkatan' => $request->input('no_angkatan'),
        //     'tahun_masuk' => $request->input('tahun_masuk'),
        //     'tahun_keluar' => $request->input('tahun_keluar'),
        // ];
        // if ($data) {
        // tangkatan::where('id_angkatan', $id)->update($data);

        // return redirect()->to('angkatan')->with('success','berhasil menambahkan data');

        // }else {
        //     return redirect()->back();
        // }
    }}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tangkatan $tangkatan, Request $request)
    {
        $id_angkatan = $request->input('id_angkatan');
        $data = tangkatan::find($id_angkatan);

        if (!$data) {
            return response()->json(['success' => false, 'pesan' => 'Data tidak ditemukan'], 404);
        }
        
        if ($data) {
            $data->delete();
            
            return response()->json(['success' => true]);
        }
    }
}
