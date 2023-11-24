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
        DB::unprepared('DROP VIEW IF EXISTS views_wirausaha');
        DB::unprepared('
        CREATE VIEW views_wirausaha AS
        SELECT
            w.*,
            n.nama
        FROM twirausaha w
        LEFT JOIN talumni n ON w.id_alumni = n.id_alumni
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('views_wirausaha');
    }
};
