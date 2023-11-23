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
        Schema::create('tangkatan', function (Blueprint $table) {
            $table->integer('id_angkatan',true);
            $table->integer('no_angkatan',false)->nullable(false);
            $table->date('tahun_masuk')->nullable(false);
            $table->date('tahun_keluar')->nullable(false);
            $table->timestamps();
        });
        
        DB::unprepared('CREATE TRIGGER tambah_angkatan AFTER INSERT ON tangkatan FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Angkatan \', NEW.no_angkatan, \' \', \'telah ditambahkan pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_angkatan AFTER UPDATE ON tangkatan FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Angkatan \', OLD.no_angkatan, \' \', \'telah diperbarui pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_angkatan AFTER DELETE ON tangkatan FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Angkatan \', OLD.no_angkatan, \' \', \'telah dihapus pada \', \' \', NOW())); END;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tangkatan');
    }
};
