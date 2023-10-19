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
    public function create()
    {
        //
        return view('data_akun.tambah');

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
            return redirect('akun');
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
    public function destroy(takun $takun)
    {
        //
    }
}
