<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $trgName = 'trgAlumniInsert';
    public function up(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS ' . $this->trgName);
        DB::unprepared(
            'CREATE TRIGGER ' . $this->trgName . ' AFTER INSERT ON talumni
    FOR EACH ROW
    BEGIN
        DECLARE alumni_id INT;
        DECLARE nama_alumniid VARCHAR(200);

        SELECT nama INTO nama_alumniid FROM talumni WHERE id_alumni = NEW.id_alumni;
        SELECT id_alumni INTO alumni_id FROM talumni WHERE id_alumni = NEW.id_alumni;

        INSERT INTO logs (logs) VALUES (CONCAT(nama_alumniid, ": Melakukan Penambahan Surat Dengan Nomor ", alumni_id));
    END'
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trigger_alumni');
    }
};
