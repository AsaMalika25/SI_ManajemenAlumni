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
        Schema::create('tkerja', function (Blueprint $table) {
            $table->integer('id_kerja',true);
            $table->integer('id_alumni',false)->nullable(false);
            $table->text('instansi')->nullable(false);
            $table->text('jabatan')->nullable(false);

            $table->foreign('id_alumni')->references('id_alumni')->on('talumni')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkerjas');
    }
};
