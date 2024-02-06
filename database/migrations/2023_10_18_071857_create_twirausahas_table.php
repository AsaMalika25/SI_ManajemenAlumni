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
        Schema::create('twirausaha', function (Blueprint $table) {
            $table->integer('id_wirausaha',true);
            $table->integer('id_alumni',false)->nullable(false);
            $table->text('nama_usaha')->nullable(false);
            $table->text('bidang')->nullable(false);
            $table->text('gambar_usaha')->nullable(false);

            $table->foreign('id_alumni')->references('id_alumni')->on('talumni')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
        DB::unprepared('DROP FUNCTION IF EXISTS wirausaha');
        DB::unprepared('
        CREATE FUNCTION wirausaha() RETURNS INT
        BEGIN
        DECLARE total INT;
        SELECT COUNT(*) INTO total from twirausaha;
        RETURN total;
        END
        ');

        DB::unprepared('CREATE TRIGGER tambah_wirausaha AFTER INSERT ON twirausaha FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Wirausaha \', NEW.nama_usaha, \' \', \'telah ditambahkan pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_wirausaha AFTER UPDATE ON twirausaha FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Wirausaha \', OLD.nama_usaha, \' \', \'telah diperbarui pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_wirausaha AFTER DELETE ON twirausaha FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Wirausaha \', OLD.nama_usaha, \' \', \'telah dihapus pada \', \' \', NOW())); END;');
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('twirausaha');
    }
};

