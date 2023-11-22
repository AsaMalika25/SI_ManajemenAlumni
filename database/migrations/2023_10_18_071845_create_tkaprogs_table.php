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
        Schema::create('tkaprog', function (Blueprint $table) {
            $table->integer('id_kaprog',true);
            $table->integer('id_akun',false)->nullable(false);
            $table->integer('id_jurusan',false)->nullable(false);
            $table->string('nama_kaprog')->nullable(false);
            $table->string('email')->nullable(false);

            $table->foreign('id_akun')->on('takun')->references('id_akun')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_jurusan')->on('tjurusan')->references('id_jurusan')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER tambah_kaprog AFTER INSERT ON tkaprog FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'kaprog \', NEW.nama_kaprog, \' \', \'telah ditambahkan pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_kaprog AFTER UPDATE ON tkaprog FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'kaprog \', OLD.nama_kaprog, \' \', \'telah diperbarui pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_kaprog AFTER DELETE ON tkaprog FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'kaprog \', OLD.nama_kaprog, \' \', \'telah dihapus pada \', \' \', NOW())); END;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkaprogs');
    }
};
