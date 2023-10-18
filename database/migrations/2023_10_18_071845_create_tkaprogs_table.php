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
        Schema::create('tkaprog', function (Blueprint $table) {
            $table->integer('id_kaprog',true);
            $table->integer('id_akun',false)->nullable(false);
            $table->integer('id_jurusan',false)->nullable(false);
            $table->string('nama_kaprog')->nullable(false);
            $table->string('email')->nullable(false);

            $table->foreign('id_akun')->references('id_akun')->on('takun')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_jurusan')->references('id_jurusan')->on('tjurusan')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkaprogs');
    }
};
