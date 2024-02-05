<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class JenisBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $jenis_berita = ['Demokrasi', 'Politik', 'Pendidikan', 'Kesehatan', 'Olahraga', 'Kebudayaan', 'Teknologi'];

        for ($i = 0; $i < 7; $i++) {
            DB::table('tjenis_berita')->insert([
                'jenis_berita' => $jenis_berita[$i],
            ]);
        }
    }
}
