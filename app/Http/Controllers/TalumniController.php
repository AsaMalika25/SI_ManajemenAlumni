<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\takun;
use App\Models\talumni;
use App\Models\tangkatan;
use App\Models\tkelas;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Exports\AlumniExport;
use App\Exports\KelasExport;
use App\Exports\AngkatanExport;
use App\Exports\JurusanExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class TalumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(talumni $talumni)
    {
        // untuk mengambil data join 
        $total_alumni = DB::select('SELECT CountNamaAlumni() AS totalalumni')[0]->totalalumni;

        $data =[ 
            'alumni' => DB::table('views_alumni')->get(),
            'jumlah_alumni' => $total_alumni,
        ];

        // dd($data);

        return view('data_alumni.index',$data);
    }

    public function export() 
    {
        return Excel::download(new AlumniExport, 'alumni_data.xlsx');
    }

    public function cetak_pdf()
    {
        $data = [
            'alumni' =>DB::table('views_alumni')->get()
        ]; 
 
    	$pdf = Pdf::loadview('data_alumni.alumni_pdf', $data);
    	return $pdf->stream('data_alumni.pdf');
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
        // untuk mengambil data foregin key
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, talumni $talumni)
    {
        // mengambil data validasi
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

            return redirect()->to('alumni')->with('success', 'Data Alumni berhasil ditambah');
        }else {
            return redirect()->back()->with('error','re-check the data that has been created');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(talumni $talumni, $id)
    {
        $data = [
            'alumni' => DB::table('views_alumni')->where('id_alumni', $id)->first(),
        ];
        return view('data_alumni.detail',$data);
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
        // mengambil data foregin untuk edit
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
        // mengambil data validasi
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
