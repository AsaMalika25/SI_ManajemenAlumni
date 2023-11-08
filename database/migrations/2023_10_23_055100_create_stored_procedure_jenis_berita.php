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
        DB::unprepared('DROP Procedure IF EXISTS CreateJenisBerita');
        DB::unprepared(
            "CREATE PROCEDURE CreateJenisBerita(berita TEXT(255))
            BEGIN
            DECLARE pesan_error CHAR(5) DEFAULT '00000';
            DECLARE CONTINUE HANDLER FOR SQLEXCEPTION, SQLWARNING

            BEGIN
            GET DIAGNOSTICS CONDITION 1
            pesan_error = RETURNED_SQLSTATE;
            END;

            START TRANSACTION;
            SAVEPOINT satu;
            INSERT INTO tjenis_berita(jenis_berita) VALUES (berita);

            IF pesan_error != '00000' THEN ROLLBACK TO satu;
            END IF;
            COMMIT;
            END;
        ");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stored_procedure_jenis_berita');
    }
};
