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
        Schema::create('buku', function (Blueprint $table) {
            $table->id('kd_exmp');
            $table->string('isbn')->notNull();
            $table->string('judul')->notNull();
            $table->string('penulis')->notNull();
            $table->integer('tahun_terbit')->notNull();
            $table->unsignedBigInteger('id_pnb')->notNull();
            $table->foreignId('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade');
            $table->timestamps();
            $table->foreign('id_pnb')->references('id_pnb')->on('penerbit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
