<?php

namespace App\Http\Controllers;

use App\Models\takun;
use App\Models\tjenis_berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Validation\Rule;


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

    public function cetak_pdf()
    {
        $data = [
            'akun' =>takun::all(),
        ]; 
 
    	$pdf = Pdf::loadview('data_akun.list_akun_pdf', $data);
    	return $pdf->download('list_akun.pdf');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => ['required','min:6',],
        ], [
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::check()) {

                if (Auth::user()->role == 'superadmin') {

                    return redirect('dashboard');

                }elseif (Auth::user()->role == 'alumni') {

                    return redirect('data-alumni');

                }elseif (Auth::user()->role == 'kaprog') {

                    return redirect('dashboard');
                }
            }

        }else{
            return redirect()->back()->with('error', 'Password not macth.');
        }
            
        
        
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
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
                'password' => ['required','min:6'],
                'profile' => ['sometimes'],
                'role' =>['required'],
                'profile' =>['sometimes'],
            ]
        );

        if ($request->hasFile('profile')) {
            $foto_file = $request->file('profile');
            $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('foto'), $foto_nama);
            $data['profile'] = $foto_nama;
        }

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
        if($request->hasFile('file') && $request->file('profile')->isValid())
        {
            $foto_file = $request->file('profile');
            $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('img'), $foto_nama);
            $data['profile'] = $foto_nama;
        }
                // $data['id_akun']= 1;
            //simpan jika sudah terisi semua
                $takun->create($data);
                return redirect('list_akun');
            else:
            //kembali ke form tambah dataa
                return back()->withErrors('error', 'Data User gagal di tambah pastikan password mengandung huruf besar-kecil dan memiliki satu karakter unik serta angka numerik');
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
        $id = $request->input('id_akun');
        $data = takun::find($id);

        if (!$data) {
            return response()->json(['success' => false, 'pesan' => 'Data tidak ditemukan'], 404);
        }
        
        if ($data) {
            $data->delete();
            return response()->json(['success' => true]);
        }
    }
}

