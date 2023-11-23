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
        Schema::create('tkelas', function (Blueprint $table) {
            $table->integer('id_kelas',true);
            $table->integer('id_jurusan',false)->nullable(false);
            $table->integer('id_angkatan',false)->nullable(false);
            $table->string('nama_kelas', 255)->nullable(false);

            $table->foreign('id_jurusan')->references('id_jurusan')->on('tjurusan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_angkatan')->references('id_angkatan')->on('tangkatan')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
        DB::unprepared('CREATE TRIGGER tambah_kelas AFTER INSERT ON tkelas FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Kelas \', NEW.nama_kelas, \' \', \'telah ditambahkan pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_kelas AFTER UPDATE ON tkelas FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Kelas \', OLD.nama_kelas, \' \', \'telah diperbarui pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_kelas AFTER DELETE ON tkelas FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Kelas \', OLD.nama_kelas, \' \', \'telah dihapus pada \', \' \', NOW())); END;');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsuperadmin');
    }
};
