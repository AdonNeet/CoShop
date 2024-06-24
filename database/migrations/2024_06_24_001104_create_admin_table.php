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
        Schema::create('admin', function (Blueprint $table) {
            $table->string('idAdmin', 10)->primary();
            $table->string('Akun_idAkun', 10);
            $table->string('nama', 45);
            $table->timestamps();

            $table->foreign('Akun_idAkun')->references('idAkun')->on('akun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
