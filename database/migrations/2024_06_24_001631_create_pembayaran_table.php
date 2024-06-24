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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->string('idPembayaran', 10)->primary();
            $table->string('idMetodePembayaran', 10);
            $table->string('idPesanan', 10);
            $table->date('tanggal');
            $table->integer('jumlah');
            $table->integer('statusPembayaran');
            $table->timestamps();

            $table->foreign('idMetodePembayaran')->references('idMetodePembayaran')->on('metode_pembayaran');
            $table->foreign('idPesanan')->references('idPesanan')->on('pesanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
