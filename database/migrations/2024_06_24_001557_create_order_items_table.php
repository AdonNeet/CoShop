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
        Schema::create('order_items', function (Blueprint $table) {
            $table->string('idPesanan', 10);
            $table->string('idProduk', 10);
            $table->integer('quantity');
            $table->timestamps();

            $table->primary(['idPesanan', 'idProduk']);
            $table->foreign('idPesanan')->references('idPesanan')->on('pesanan');
            $table->foreign('idProduk')->references('idProduk')->on('produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
