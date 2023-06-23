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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('id_peminjaman');
            $table->foreignId('id_agt')->references('id')->on('anggota')->onDelete('cascade');
            $table->foreignId('kd_exmp')->references('kd_exmp')->on('buku')->onDelete('cascade');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_batas');
            $table->date('tanggal_pengembalian')->default(null);
            $table->enum('status_pengembalian',['Belum Dikembalikan','Sudah Dikembalikan'])->default('Belum Dikembalikan');
            $table->foreignId('id_ptkw')->references('id')->on('pustakawan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
