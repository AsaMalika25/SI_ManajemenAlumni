<?php

namespace App\Exports;

use App\Models\talumni;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AlumniExport implements FromCollection, WithColumnWidths, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        $query = DB::table("talumni")
             ->join("tkelas","talumni.id_kelas","=","tkelas.id_kelas")
             ->join("tangkatan","talumni.id_angkatan","=","tangkatan.id_angkatan")
             ->join("takun","talumni.id_akun","=","takun.id_akun")
             ->select("talumni.*","tkelas.nama_kelas","tangkatan.no_angkatan","takun.username")
             ->orderBy("id_alumni","asc");

        // Output the SQL query
        // dd($query->toSql());

        $data = $query->get();



        return collect($data);
    }

    public function columnWidths(): array
    {
        return [
            'D' => 15,
            'E' => 25,
            'F' => 10,            
            'G' => 15,            
            'H' => 25,            
            'I' => 15,            
            'J' => 20,            
            'K' => 25,                        
            'O' => 20,                        
            'P' => 22,                        
        ];
    }


    public function headings(): array
    {
        return [
            'id_alumni',
            'id_akun',
            'id_kelas',
            'id_angkatan',
            'nama',
            'tgl_lahir',
            'alamat',
            'email',
            'no_telp',
            'sosmed',
            'ijazah',
            '',
            '',
            '',
            'nama_kelas',
            'no_angkatan',
            'username',
        ];
    }
}
