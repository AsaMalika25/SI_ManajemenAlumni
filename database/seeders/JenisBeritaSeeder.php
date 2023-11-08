<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JenisBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tjenis_berita')->insert([
            'jenis_berita' => 'Lowongan Pekerjaan',
       ]);

       DB::table('tjenis_berita')->insert([
        'jenis_berita' => 'Lowongan Magang',
        ]);
    }
}
