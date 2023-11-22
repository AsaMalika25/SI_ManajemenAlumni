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
        Schema::create('tjurusan', function (Blueprint $table) {
            $table->integer('id_jurusan',true);
            $table->string('nama_jurusan')->nullable(false);
            $table->timestamps();
        });

        
        DB::unprepared('CREATE TRIGGER tambah_jurusan AFTER INSERT ON tjurusan FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'jurusan \', NEW.nama_jurusan, \' \', \'telah ditambahkan pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_jurusan AFTER UPDATE ON tjurusan FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Jurusan \', OLD.nama_jurusan, \' \', \'telah diperbarui pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_jurusan AFTER DELETE ON tjurusan FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Jurusan \', OLD.nama_jurusan, \' \', \'telah dihapus pada \', \' \', NOW())); END;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tjurusan');
    }
};
