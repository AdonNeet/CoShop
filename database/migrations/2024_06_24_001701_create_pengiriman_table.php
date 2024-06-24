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
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->string('idPengiriman', 10)->primary();
            $table->string('idEkspedisi', 10);
            $table->string('idPesanan', 10);
            $table->date('tanggal');
            $table->integer('statusPengiriman');
            $table->timestamps();

            $table->foreign('idEkspedisi')->references('idEkspedisi')->on('ekspedisi');
            $table->foreign('idPesanan')->references('idPesanan')->on('pesanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
