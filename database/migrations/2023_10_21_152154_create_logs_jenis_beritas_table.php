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
        Schema::create('logs_jenis_berita', function (Blueprint $table) {
            $table->integer('id_logs')->autoIncrement();
            $table->text('log')->nullable(false);
            $table->timestamps(false);
        });

        // DB::unprepared('DROP PROCEDURE IF EXISTS tambah_jenis_berita');
        // DB::unprepared('
        // CREATE PROCEDURE tambah_jenis_berita( IN jenis_berita VARCHAR(255))
        // BEGIN
      
        // START TRANSACTION;
        // INSERT INTO tjenis_berita(id_jenis_berita, jenis_berita) VALUES (lowongan);
        // COMMIT;
        // END;
        // '); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs_jenis_berita');
    }
};
