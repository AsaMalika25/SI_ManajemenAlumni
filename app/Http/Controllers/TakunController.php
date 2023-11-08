<?php

namespace App\Http\Controllers;

use App\Models\takun;
use App\Models\tjenis_berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class TakunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Auth.login');
    }

    public function create()
    {
        return view('data_akun.tambah');
    }

    public function list(takun $takun)
    {
        //
        $data = [
            'takun'=> $takun->all()
        ];
        return view('data_akun.index',$data);
        

    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
                    return redirect('alumni')->with('success', 'you are logged');
                }else {
                    return redirect()->back()->withErrors('The username and password entered are incorrect');
                }
                
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('success','you are logout');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function register(){
        return view('Auth.register');
    }

    public function prosesregister(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:takun,username',
            'password' => 'required|min:8'
        ], [
            'username.required' => 'Nama wajib diisi',
            'username.username' => 'Email yang dimasukkan tidak valid',
            'username.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minumum password 8 karakter'
        ]);

        $CekUser = takun::where('username', $request->username)->first();

        if ($CekUser) {
            return redirect()->back()->with('username sudah terdaftar');
        }

        $data = [
            'username' => $request->username,
            // 'passwords' => $request->password,
            'password' => Hash::make($request->password),
            'role' => 'alumni',
        ];

        // dd($data);

        takun::create($data);

        // $infologin = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];
        return redirect('login')->with('success', $request->username . 'Berhasil register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, takun $takun)
    {
        //
        $data = $request->validate(
            [
                'username' => ['required'],
                'password' => ['required'],
                'role' =>['required'],
            ]
        );
        if($request->input('id_akun') !== null){
            //proses Update
            $data['password'] = Hash::make($data['password']);
            $dataUpdate = takun::where('id_akun', $request->input('id_akun'))
                            ->update($data);
        if($dataUpdate){
            return redirect('list_akun');
        }else{
            return back()->with('error', 'Akun User gagal di update');
        }
        }else{
            //proses Insert
            $data['password'] = Hash::make($data['password']);

            if($data):
                // $data['id_akun']= 1;
            //simpan jika sudah terisi semua
                $takun->create($data);
                return redirect('list_akun');
            else:
            //kembali ke form tambah dataa
                return back()->with('erorr', 'Data User gagal ditambah');
            endif;
        }    

    }

    /**
     * Display the specified resource.
     */
    public function show(takun $takun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(takun $takun, Request $request, string $id)
    {
        // 
        $takun = takun::where('id_akun',$id)->first();

        if ($takun){

            return view('data_akun.edit')->with(['takun' => $takun]);
        }   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, takun $takun)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request)
    {
        //
        
// $id_akun = $request->input('id_akun');


// Hapus
$aksi = takun::where('id_akun', $id)->first();


if ($aksi) {
    $aksi->delete();
    // Pesan Berhasil
    // $pesan = [
    //     'success' => true,
    //     'pesan'   => 'Data akun berhasil dihapus'
    // ];
    return redirect("list_akun")->with('success','data berhasill ditambah');
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

