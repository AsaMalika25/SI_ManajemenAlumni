<?php

namespace App\Http\Controllers;

use App\Models\takun;
use App\Models\talumni;
use App\Models\tkerja;
use App\Models\tkuliah;
use App\Models\twirausaha;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalAlumni = talumni::count();
        $alumniKerja = tkerja::count();
        $alumniKuliah = tkuliah::count();
        $alumniUsaha = twirausaha::count();

        // Calculate the result of the subtraction
        $hasilPengurangan = $totalAlumni - ($alumniKerja + $alumniKuliah + $alumniUsaha);

        // Make sure the result is not negative
        $hasilPengurangan = max(0, $hasilPengurangan);

        $data = [
            'total_alumni' => $totalAlumni,
            'alumni_kerja' => $alumniKerja,
            'alumni_kuliah' => $alumniKuliah,
            'alumni_usaha' => $alumniUsaha,
            
        
        'hasilPengurangan' => $hasilPengurangan,
        ];

        return view('dashboard.index', $data);
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
    public function store(Request $request)
    {
        //
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
        //
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
