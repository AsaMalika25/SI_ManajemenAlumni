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
        Schema::create('tkuliah', function (Blueprint $table) {
            $table->integer('id_kuliah',true);
            $table->integer('id_alumni',false)->nullable(false);
            $table->text('nama_lembaga')->nullable(false);
            $table->text('jurusan_kuliah')->nullable(false);

            $table->foreign('id_alumni')->references('id_alumni')->on('talumni')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
        DB::unprepared('CREATE TRIGGER tambah_kuliah AFTER INSERT ON tkuliah FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Data Kuliah \', NEW.nama_lembaga, \' \', \'telah ditambahkan pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_kuliah AFTER UPDATE ON tkuliah FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Data Kuliah \', OLD.nama_lembaga, \' \', \'telah diperbarui pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_kuliah AFTER DELETE ON tkuliah FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Data Kuliah \', OLD.nama_lembaga, \' \', \'telah dihapus pada \', \' \', NOW())); END;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkuliahs');
    }
};
