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
        
        DB::unprepared('DROP Procedure IF EXISTS Createangkatan');
        DB::unprepared("
        CREATE PROCEDURE Createangkatan(
            IN p_no_angkatan INT,
            IN p_tahun_masuk DATE,
            IN p_tahun_keluar DATE
        )
        BEGIN
            DECLARE p_id_angkatan INT;
            DECLARE pesan_error CHAR(5) DEFAULT '00000';
            DECLARE CONTINUE HANDLER FOR SQLEXCEPTION, SQLWARNING

            BEGIN
            GET DIAGNOSTICS CONDITION 1
            pesan_error = RETURNED_SQLSTATE;
            END;

            START TRANSACTION;
            SAVEPOINT satu;
            
            -- Insert data angkatan
            INSERT INTO tangkatan (no_angkatan, tahun_masuk, tahun_keluar)
            VALUES (p_no_angkatan, p_tahun_masuk, p_tahun_keluar);
            
            SET p_id_angkatan = LAST_INSERT_ID();  -- Mendapatkan ID angkatan yang baru dibuat

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
        Schema::dropIfExists('stored_procedure_angkatan');
    }
};
