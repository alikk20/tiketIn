<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        // Hapus dulu jika sebelumnya sudah ada trigger dengan nama sama
        DB::unprepared('DROP TRIGGER IF EXISTS reduce_stok_after_tiket_insert');

        DB::unprepared('
            CREATE TRIGGER reduce_stok_after_tiket_insert
            AFTER INSERT ON tiket FOR EACH ROW
            BEGIN
                UPDATE acara
                SET stok = stok - 1
                WHERE id = NEW.id_acara AND stok > 0;
            END
        ');
    }

    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS reduce_stok_after_tiket_insert');
    }
};
