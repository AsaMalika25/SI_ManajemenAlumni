<?php

namespace App\Http\Controllers;

use App\Models\tkaprog;
use App\Models\takun;
use App\Models\tjurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TkaprogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(tkaprog $kaprog)
    {
        $data = [   
            'kaprog' => DB::table('views_kaprog')->get(),
        ];
        return view('data_kaprog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(tkaprog $kaprog, takun $takun, tjurusan $tjurusan)
    {
        $data = [
            'takun' => $takun->all(),
            'tjurusan' => $tjurusan->all(),
        ];
        return view('data_kaprog.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, tkaprog $tkaprog)
    {
        $data = $request->validate([
            'id_akun' => ['required'],
            'id_jurusan' => ['required'],
            'nama_kaprog' => ['required'],
            'email' => ['required'],
        ]);
        //  dd($data);
        if($data)
        {
            if(tkaprog::create($data))
            {
                return redirect('/kaprog')->with('success', 'Data Berhasil di Update');
            }else
            {
                return back()->with('error','Data  gagal di update');
            }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(tkaprog $tkaprog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tkaprog $tkaprog, Request $request, takun $takun, tjurusan $tjurusan)
    {
        $data = [
            'tkaprog' => tkaprog::where('id_kaprog', $request->id)->first(),
            'takun' => $takun->all(),
            'tjurusan' => $tjurusan->all(),
        ];
        return view('data_kaprog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tkaprog $tkaprog, takun $takun, tjurusan $tjurusan )
    {
        $data = $request->validate([
            'id_akun' => ['required'],
            'id_jurusan' => ['required'],
            'nama_kaprog' => ['required'],
            'email' => ['required'],
        ]);
        if($request->input('id_kaprog') !== null ){
            //Proses Update
            $dataUpdate = tkaprog::where('id_kaprog',$request->input('id_kaprog'))
            ->update($data);
        if($dataUpdate){
            return redirect('/kaprog')->with('success', 'Kaprog Berhasil di Update');
        }else{
        return back()->with('error','Data Kaprog gagal di update');
        }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request, tkaprog $tkaprog)
    {
        $id_kaprog = $request->input('id_kaprog');
        $data = $tkaprog->find($id_kaprog);
        //  dd($data);
        if (!$data) {
            return response()->json(['success' => false, 'pesan' => 'Data tidak ditemukan'], 404);
        }
        
        if ($data) {
            $data->delete();
            return response()->json(['success' => true]);
        }
        }
}
