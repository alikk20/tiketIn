<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('verifikasi_penjual', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa')->constrained('siswa')->onDelete('cascade');
            $table->foreignId('id_admin')->constrained('admin')->onDelete('cascade');
            $table->timestamp('tanggal_verifikasi')->nullable();
            $table->enum('status_verifikasi', ['menunggu', 'disetujui', 'ditolak']);
            $table->string('catatan')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifikasi_penjual');
    }
};
