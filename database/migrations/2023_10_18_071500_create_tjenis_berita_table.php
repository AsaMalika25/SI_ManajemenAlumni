<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tjenis_berita', function (Blueprint $table) {
            $table->integer('id_jenis_berita',true);
            $table->string('jenis_berita',false)->nullable(false);

            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER tambah_jenis_berita AFTER INSERT ON tjenis_berita FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES(concat(\'Jenis berita \', NEW.jenis_berita, \' \', \'telah ditambahkan pada\', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_jenis_berita AFTER UPDATE ON tjenis_berita FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat(\'Jenis berita \', OLD.jenis_berita, \' \', \'telah diperbarui menjadi jenis_berita \', \' \', NEW.jenis_berita, \' \', \'pada\', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_jenis_berita AFTER DELETE ON tjenis_berita FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat(\'Jenis berita \', OLD.jenis_berita, \' \', \'telah dihapus pada\', \' \', NOW())); END;');
       
        DB::unprepared('DROP FUNCTION IF EXISTS jenisBerita');
        DB::unprepared('
        CREATE FUNCTION jenisBerita() RETURNS INT
        BEGIN
        DECLARE total INT;
        SELECT COUNT(*) INTO total from tjenis_berita;
        RETURN total;
        END
        '); 
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkelas');
    }
};
