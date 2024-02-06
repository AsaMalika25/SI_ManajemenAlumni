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
        // Schema::create('tsuperadmin', function (Blueprint $table) {
        //     $table->integer('id_superadmin',true);
        //     $table->integer('id_akun',false)->nullable(false);
        //     $table->string('username')->nullable(false);
        //     $table->text('password')->nullable(false);
        //     $table->string('nama')->nullable(false);
        //     $table->string('email')->nullable(false);

        //     $table->foreign('id_akun')
        //         ->references('id_akun')->on('takun')
        //         ->onUpdate('cascade')->onDelete('cascade');

        //     $table->timestamps();
        // });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('tjenis_berita');
    }
};
