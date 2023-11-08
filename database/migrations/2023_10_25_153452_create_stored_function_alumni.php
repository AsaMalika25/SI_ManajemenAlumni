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
        DB::unprepared('DROP FUNCTION IF EXISTS CountNamaAlumni');

        DB::unprepared('
        CREATE FUNCTION CountNamaAlumni() RETURNS INT
        BEGIN
            DECLARE total INT;
            SELECT COUNT(*) INTO total FROM talumni;
            RETURN total;
        END
    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stored_function_alumni');
    }
};
