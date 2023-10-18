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
        Schema::create('takun', function (Blueprint $table) {
            $table->integer('id_akun',true);
            $table->string('username')->nullable(false);
            $table->text('password')->nullable(false);
            $table->enum('role',['superadmin','alumni','kaprog']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('takun');
    }
};
