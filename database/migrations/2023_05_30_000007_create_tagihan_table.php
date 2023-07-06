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
            $table->id();
            $table->date('TglDibuat');
            $table->integer('Pengunaan');
            $table->integer('PengunaanLebih');
            $table->integer('Biaya');
            $table->char('Bulan', 10);
            $table->boolean('Status');
            $table->date('TglBayar');
            $table->unsignedBigInteger('NoPelanggan');
            $table->unsignedBigInteger('NoKasir');

            $table->foreign('NoPelanggan')->references('id')->on('pelanggan');
            $table->foreign('NoKasir')->references('id')->on('kasir');
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