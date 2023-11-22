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
        Schema::create('tkerja', function (Blueprint $table) {
            $table->integer('id_kerja',true);
            $table->integer('id_alumni',false)->nullable(false);
            $table->text('instansi')->nullable(false);
            $table->text('jabatan')->nullable(false);

            $table->foreign('id_alumni')->references('id_alumni')->on('talumni')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
        DB::unprepared('CREATE TRIGGER tambah_kerja AFTER INSERT ON tkerja FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Data kerja \', NEW.instansi, \' \', \'telah ditambahkan pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_kerja AFTER UPDATE ON tkerja FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Data kerja \', OLD.instansi, \' \', \'telah diperbarui pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_kerja AFTER DELETE ON tkerja FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Data kerja \', OLD.instansi, \' \', \'telah dihapus pada \', \' \', NOW())); END;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkerjas');
    }
};
