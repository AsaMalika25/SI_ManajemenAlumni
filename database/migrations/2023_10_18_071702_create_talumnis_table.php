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
        Schema::create('talumni', function (Blueprint $table) {
            $table->integer('id_alumni',true);
            $table->integer('id_akun')->index('id_akun')->nullable(false);
            $table->integer('id_kelas')->index('id_kelas')->nullable(false);
            $table->integer('id_angkatan')->index('id_angkatan')->nullable(false);
            $table->string('nama')->nullable(false);
            $table->date('tgl_lahir')->nullable(false);
            $table->text('alamat')->nullable(false);
            $table->string('email')->nullable(false);
            $table->bigInteger('no_telp')->nullable(false);
            $table->text('sosmed')->nullable(false);
            $table->text('ijazah');
            $table->enum('jenkel',['Laki-laki','Perempuan'])->nullable(false);

            $table->foreign('id_akun')->on('takun')->references('id_akun')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kelas')->on('tkelas')->references('id_kelas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_angkatan')->on('tangkatan')->references('id_angkatan')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
        DB::unprepared('CREATE TRIGGER tambah_alumni AFTER INSERT ON talumni FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Data alumni \', NEW.nama, \' \', \'telah ditambahkan pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_alumni AFTER UPDATE ON talumni FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Data alumni \', OLD.nama, \' \', \'telah diperbarui pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_alumni AFTER DELETE ON talumni FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Data alumni \', OLD.nama, \' \', \'telah dihapus pada \', \' \', NOW())); END;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talumni');
    }
};
