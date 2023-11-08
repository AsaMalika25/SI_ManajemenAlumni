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
        DB::unprepared('DROP Procedure IF EXISTS Createkelas');
        DB::unprepared("
        CREATE PROCEDURE Createkelas(
            IN new_id_jurusan INT,
            IN new_id_angkatan INT, -- Menggunakan integer untuk foregin key
            IN new_nama_kelas VARCHAR(255)
        )
        BEGIN
        DECLARE new_id_kelas INT;
        DECLARE pesan_error char(5) DEFAULT '0000';
        DECLARE CONTINUE HANDLER FOR  SQLEXCEPTION, SQLWARNING

        BEGIN
        GET DIAGNOSTICS CONDITION 1
        pesan_error = RETURNED_SQLSTATE;
        END;

        START TRANSACTION;
        SAVEPOINT satu;
        
        -- Sisipkan data ke dalam tabel kelas
        IF NOT EXISTS (SELECT * FROM tkelas WHERE id_jurusan = new_id_jurusan AND id_angkatan = new_id_angkatan) THEN
        INSERT INTO tkelas (id_jurusan, id_angkatan, nama_kelas) VALUES (new_id_jurusan, new_id_angkatan, new_nama_kelas);
        
        IF pesan_error != '00000' THEN ROLLBACK TO satu;
        END IF;
        
       
    
        -- Dapatkan ID kelas yang baru disisipkan
        SET new_id_kelas = LAST_INSERT_ID();
        
        IF pesan_error != '00000' THEN ROLLBACK TO satu;
        END IF;
        COMMIT;

        END IF;
        END
        
        
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stored_procedur_angkatan');
    }
};
