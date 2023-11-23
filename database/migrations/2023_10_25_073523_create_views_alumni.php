<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('DROP VIEW IF EXISTS views_alumni');
        DB::unprepared('
        CREATE VIEW views_alumni AS
        SELECT
            a.*,
            k.nama_kelas,
            t.no_angkatan,
            ak.username
        FROM talumni a
        LEFT JOIN tkelas k ON a.id_kelas = k.id_kelas
        LEFT JOIN tangkatan t ON a.id_angkatan = t.id_angkatan
        LEFT JOIN takun ak ON a.id_akun = ak.id_akun
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('views_alumni');
    }
};
