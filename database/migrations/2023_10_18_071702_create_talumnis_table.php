<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->integer('id_akun',false)->nullable(false);
            $table->integer('id_kelas',false)->nullable(false);
            $table->string('nama')->nullable(false);
            $table->date('tgl_lahir')->nullable(false);
            $table->text('alamat')->nullable(false);
            $table->string('email')->nullable(false);
            $table->integer('no_telp')->nullable(false);
            $table->text('sosmed')->nullable(false);
            $table->text('ijazah');
            $table->enum('jenkel',['L','P'])->nullable(false);

            $table->foreign('id_akun')->references('id_akun')->on('takun')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kelas')->references('id_kelas')->on('tkelas')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talumni');
    }
};
