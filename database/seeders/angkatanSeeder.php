<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class angkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $angkatan = [];

        for ($i = 1; $i <= 15; $i++) {
            $angkatan[] = [
                'id_angkatan' => $i,
                'no_angkatan' => $faker->numberBetween(1,50),
                'tahun_masuk' => $faker->date(),
                'tahun_keluar' => $faker->date(),
            ];
        }

        DB::table('tangkatan')->insert($angkatan);
    }
}