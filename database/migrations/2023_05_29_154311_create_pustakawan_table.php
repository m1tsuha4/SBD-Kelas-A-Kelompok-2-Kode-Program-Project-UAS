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
        Schema::create('pustakawan', function (Blueprint $table) {
            $table->id('id_ptkw');
            $table->string('nama_pustakawan',50);
            $table->enum('jenis_kelamin',['L','P']);
            $table->date('tgl_lahir_pustakawan');
            $table->string('alamat_pustakawan');
            $table->string('tlp_pustakawan',20);
            $table->string('email_pustakawan',50)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pustakawan');
    }
};
