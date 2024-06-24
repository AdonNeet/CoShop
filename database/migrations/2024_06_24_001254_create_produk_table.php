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
        Schema::create('produk', function (Blueprint $table) {
            $table->string('idProduk', 10)->primary();
            $table->string('idPenjual', 10);
            $table->string('idKategori', 10);
            $table->string('nama', 100);
            $table->integer('harga');
            $table->integer('stok');
            $table->timestamps();

            $table->foreign('idPenjual')->references('idPenjual')->on('penjual');
            $table->foreign('idKategori')->references('idKategori')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
