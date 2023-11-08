<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class angkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tangkatan')->insert([
            'no_angkatan' => '1',
            'tahun_masuk' => '2003-12-7',
            'tahun_keluar' => '2005-12-7',
       ]);

       DB::table('tangkatan')->insert([
            'no_angkatan' => '2',
            'tahun_masuk' => '2003-12-4',
            'tahun_keluar' => '2003-12-14',
       ]);
    }
}
