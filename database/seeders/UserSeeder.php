<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('takun')->insert([
            'username' => 'superadmin',
            'role' => 'superadmin',
            'password' => Hash::make('S3up#r4dm1n'),
       ]);

       DB::table('takun')->insert([
            'username' => 'alumni',
            'role' => 'alumni',
            'password' => Hash::make('4lumn1_Sm@k'),
       ]);

       DB::table('takun')->insert([
            'username' => 'kaprog',
            'role' => 'kaprog',
            'password' => Hash::make('K@pr0gP@ssw0rd'),
       ]);
    }
}
