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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->string('idPesanan', 10)->primary();
            $table->string('idPembeli', 10);
            $table->date('tanggal');
            $table->integer('statusPesanan');
            $table->integer('totalHarga');
            $table->string('alamatPengiriman', 255);
            $table->timestamps();

            $table->foreign('idPembeli')->references('idPembeli')->on('pembeli');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
