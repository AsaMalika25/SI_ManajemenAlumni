<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumniController extends Controller
{
    public function index()
    {
        $total_alumni = DB::select('SELECT CountNamaAlumni() AS totalalumni')[0]->totalalumni;

        $data = [
            'alumni' => DB::table('views_alumni')->get(),

            'jumlah_alumni' => $total_alumni,
        ];
        return view('data_alumni.alumni',$data);
    }
}
