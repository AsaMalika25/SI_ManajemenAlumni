<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tberita', function (Blueprint $table) {
            $table->integer('id_berita',true);
            $table->integer('id_jenis_berita',false)->nullable(false);
            $table->text('file')->nullable(false);
            $table->string('judul_berita')->nullable(false);
            $table->date('tgl_post')->nullable(false);
            $table->integer('kode_berita',false)->nullable(false);
            $table->text('ket_berita')->nullable(false);

            // $table->foreign('id_alumni')->references('id_alumni')->on('talumni')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('id_superadmin')->references('id_superadmin')->on('tsuperadmin')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_jenis_berita')->references('id_jenis_berita')->on('tjenis_berita')->onDelete('cascade')->onUpdate('cascade');

            
            $table->timestamps();
        });
        DB::unprepared('CREATE TRIGGER tambah_berita AFTER INSERT ON tberita FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES(concat(\'Berita dengan judul \', NEW.judul_berita, \' \', \'telah ditambahkan pada\', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_berita AFTER UPDATE ON tberita FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat(\'Berita dengan judul \', OLD.judul_berita, \' \', \'telah diperbarui menjadi berita dengan judul \', \' \', NEW.judul_berita, \' \', \'pada\', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_berita AFTER DELETE ON tberita FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat(\'Berita dengan judul \', OLD.judul_berita, \' \', \'telah dihapus pada\', \' \', NOW())); END;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tberita');
    }
};
