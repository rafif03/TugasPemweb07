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
        Schema::create('tagihan', function (Blueprint $table) {
            $table->char('IDTagihan', 10)->primary()->required;
            $table->date('TglDibuat')->required;
            $table->integer('Pengunaan');
            $table->integer('PengunaanLebih');
            $table->integer('Biaya');
            $table->char('Bulan', 10)->required;
            $table->boolean('Status')->required;
            $table->date('TglBayar');
            $table->char('NoPelanggan', 10)->required;
            $table->char('NoKasir', 10);

            $table->foreign('NoPelanggan')->references('NoPelanggan')->on('pelanggan');
            $table->foreign('NoKasir')->references('NoKasir')->on('kasir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihan');
    }
};