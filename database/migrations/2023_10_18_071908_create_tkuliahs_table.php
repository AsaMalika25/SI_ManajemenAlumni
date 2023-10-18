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
        Schema::create('tkuliah', function (Blueprint $table) {
            $table->integer('id_kuliah',true);
            $table->integer('id_alumni',false)->nullable(false);
            $table->text('nama_lembaga')->nullable(false);
            $table->text('jurusan_kuliah')->nullable(false);

            $table->foreign('id_alumni')->references('id_alumni')->on('talumni')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkuliahs');
    }
};
