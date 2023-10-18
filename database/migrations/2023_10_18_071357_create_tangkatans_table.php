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
        Schema::create('tangkatan', function (Blueprint $table) {
            $table->integer('id_angkatan',true);
            $table->integer('no_angkatan',false)->nullable(false);
            $table->year('tahun_masuk')->nullable(false);
            $table->year('tahun_keluar')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tangkatan');
    }
};
