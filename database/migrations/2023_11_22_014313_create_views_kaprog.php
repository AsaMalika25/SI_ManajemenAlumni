<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('views_kaprog', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        DB::unprepared('DROP VIEW IF EXISTS views_kaprog');
        DB::unprepared('
        CREATE VIEW views_kaprog AS
        SELECT
            kpr.*,
            j.nama_jurusan,
            a.id_akun
        FROM tkaprog kpr
        LEFT JOIN tjurusan j ON kpr.id_jurusan = j.id_jurusan
        LEFT JOIN takun a ON kpr.id_akun = a.id_akun
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
