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
        Schema::create('takun', function (Blueprint $table) {
            $table->integer('id_akun',true);
            $table->string('username')->nullable(false);
            $table->text('password')->nullable(false);
            $table->text('profile')->nullable(true);
            $table->enum('role',['superadmin','alumni','kaprog']);
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER tambah_akun AFTER INSERT ON takun FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Akun \', NEW.username, \' \', \'telah ditambahkan pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER edit_akun AFTER UPDATE ON takun FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Akun \', OLD.username, \' \', \'telah diperbarui pada \', \' \', NOW())); END;');
        DB::unprepared('CREATE TRIGGER hapus_akun AFTER DELETE ON takun FOR EACH ROW BEGIN INSERT INTO logs(logs) VALUES (concat
        (\'Akun \', OLD.username, \' \', \'telah dihapus pada \', \' \', NOW())); END;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('takun');
    }
};
