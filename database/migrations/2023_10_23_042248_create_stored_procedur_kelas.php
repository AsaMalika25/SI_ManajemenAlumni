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
        
            -- Sisipkan data ke dalam tabel kelas
            INSERT INTO tkelas (id_jurusan, id_angkatan, nama_kelas)
            VALUES (new_id_jurusan, new_id_angkatan, new_nama_kelas); 
        
            -- Dapatkan ID kelas yang baru disisipkan
            SET new_id_kelas = LAST_INSERT_ID();

            INSERT INTO tkelas (id_jurusan, id_angkatan) VALUES (new_id_jurusan, new_id_angkatan);
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
