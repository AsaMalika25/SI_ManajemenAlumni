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
        DB::unprepared('DROP VIEW IF EXISTS views_kaprog');
        DB::unprepared('
        CREATE VIEW views_kaprog AS
        SELECT
            kpr.*,
            jr.nama_jurusan,
            ak.username
        FROM tkaprog kpr
        LEFT JOIN tjurusan jr ON kpr.id_jurusan = jr.id_jurusan
        LEFT JOIN takun ak ON kpr.id_akun = ak.id_akun
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('views_kaprog');
    }
};
