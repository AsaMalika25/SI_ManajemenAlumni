<?php

namespace App\Http\Controllers;

use App\Models\takun;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, data_akun $data_akun)
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
            return redirect('/dashboard/manajemenuser');
        }else{
            return back()->with('error', 'Akun User gagal di update');
        }
        }else{
            //proses Insert
            $data['password'] = Hash::make($data['password']);

            if($data):
                $data['id_akun']= 1;
            //simpan jika sudah terisi semua
                $user->create($data);
                return redirect('/dashboard/manajemenuser');
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
    public function edit(takun $takun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, takun $takun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(takun $takun)
    {
        //
    }
}
