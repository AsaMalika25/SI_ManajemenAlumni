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
        Schema::create('logs_wirausaha', function (Blueprint $table) {
            $table->integer('id_logs')->autoIncrement();
            $table->text('log')->nullable(false);
            $table->timestamps(false);
        });

        DB::unprepared('CREATE TRIGGER tambah_wirausaha AFTER INSERT ON twirausaha FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'wirausaha \', NEW.nama_usaha, \' \', \'telah ditambahkan pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_wirausaha AFTER UPDATE ON twirausaha FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'wirausaha \', OLD.nama_usaha, \' \', \'telah diperbarui pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_wirausaha AFTER DELETE ON twirausaha FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'wirausaha \', OLD.nama_usaha, \' \', \'telah dihapus pada \', \' \', NOW())); END;');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs_wirausaha');
    }
};
