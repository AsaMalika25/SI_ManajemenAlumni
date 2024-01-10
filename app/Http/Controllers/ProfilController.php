<?php

namespace App\Http\Controllers;

use App\Models\talumni;
use App\Models\takun;
use App\Models\tangkatan;
use App\Models\tkelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $data = [
            'alumni' => DB::table('views_alumni')
                        ->where('id_akun', $user->id_akun)
                        ->get(),
            'kaprog' => DB::table('views_kaprog')
                        ->where('id_akun', $user->id_akun)
                        ->get(),
        ];

        return view('profile.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function profile(tangkatan $tangkatan, takun $takun, tkelas $tkelas)
    {
        $angkatan = $tangkatan->all();
        $akun = $takun->all();
        $kelas = $tkelas->all();

        return view('profile.tambah_profile', [                       
            'angkatan' => $angkatan,
            'kelas' => $kelas,
            'akun' => $akun,
            
        ]);
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function create_profile(Request $request, talumni $talumni)
    {
        $data = $request->validate([
            'nama' => ['required'],
            'email' => ['required','unique:talumni,email'],
            'tgl_lahir' => ['required'],
            'sosmed' => ['required'],
            'id_angkatan' => ['required'],
            'ijazah' => ['required'],
            'no_telp' => ['required','max:20'],
            'id_akun' => ['required'],
            'alamat' => ['required'],
            'id_kelas' => ['required'],
            'jenkel' => ['required'],
        ],[
            'nama.required' => 'name has required',
            'email.required' => 'email has required',
            'email.unique' => 'email has already taken',
            'no_telp.max' => 'max calling phone has 20 number',
            'tgl_lahir.required' => 'tgl_lahir has required',
            'sosmed.required' => 'sosmed has required',
            'id_angkatan.required' => 'no_angkatan has required',
            'ijazah.required' => 'ijazah has required',
            'no_telp.required' => 'no_telp has required',
            'id_akun.required' => 'username has required',
            'alamat.required' => 'alamat has required',
            'id_kelas.required' => 'nama_kelas has required',
            'jenkel.required' => 'jenkel has required',
        ]);

        if ($request->hasFile('ijazah')) {
            $foto_file = $request->file('ijazah');
            $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('foto'), $foto_nama);
            $data['ijazah'] = $foto_nama;
        }

        if ($talumni->create($data)) {

            return redirect()->to('/profile')->with('success', 'Data Alumni berhasil ditambah');
        }else {
            return redirect()->back()->with('error','re-check the data that has been created');
        }
    }

    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::user();

        $data = [
            'alumni' => DB::table('views_alumni')
                        ->where('id_akun', $user->id_akun)
                        ->get(),
            'kaprog' => DB::table('views_kaprog')
                        ->where('id_akun', $user->id_akun)
                        ->get(),
        ];

        return view('profile.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
