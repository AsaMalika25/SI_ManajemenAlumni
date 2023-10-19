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
            'password' => Hash::make('superadmin'),
       ]);

       DB::table('takun')->insert([
            'username' => 'alumni',
            'role' => 'alumni',
            'password' => Hash::make('alumni'),
       ]);

       DB::table('takun')->insert([
            'username' => 'kaprog',
            'role' => 'kaprog',
            'password' => Hash::make('kaprog'),
       ]);
    }
}
