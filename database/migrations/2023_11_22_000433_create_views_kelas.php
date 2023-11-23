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
        DB::unprepared('DROP VIEW IF EXISTS views_kelas');
        DB::unprepared('
        CREATE VIEW views_kelas AS
        SELECT
            k.*,
            j.nama_jurusan,
            t.no_angkatan
        FROM tkelas k
        LEFT JOIN tjurusan j ON k.id_jurusan = j.id_jurusan
        LEFT JOIN tangkatan t ON k.id_angkatan = t.id_angkatan
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('views_kelas');
    }
};
