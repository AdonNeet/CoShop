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
        Schema::create('penjual', function (Blueprint $table) {
            $table->string('idPenjual', 10)->primary();
            $table->string('Akun_idAkun', 10);
            $table->string('nama', 255);
            $table->string('alamat', 255);
            $table->string('telp', 20);
            $table->timestamps();

            $table->foreign('Akun_idAkun')->references('idAkun')->on('akun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjual');
    }
};
