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
        Schema::create('tkelas', function (Blueprint $table) {
            $table->integer('id_kelas',true);
            $table->integer('id_jurusan',false)->nullable(false);
            $table->integer('id_angkatan',false)->nullable(false);
            $table->string('nama_kelas')->nullable(false);

            $table->foreign('id_jurusan')->references('id_jurusan')->on('tjurusan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_angkatan')->references('id_angkatan')->on('tangkatan')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsuperadmin');
    }
};
