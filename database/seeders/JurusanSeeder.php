<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $nama_jurusan = ['Teknik Informatika', 'Teknik Mesin', 'Teknik kendaraan ringan', 'Teknik pengelasan', 'Kedokteran', 'ELektro', 'Kelautan'];

        for ($i = 0; $i < 7; $i++) {
            DB::table('tjurusan')->insert([
                'nama_jurusan' => $nama_jurusan[$i],
            ]);
        }
    }
}
