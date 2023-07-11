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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id('NoPelanggan');
            $table->char('NoTelp', 20);
            $table->char('Alamat', 100);
            $table->char('Email', 50);
            $table->unsignedBigInteger('IDUser');
            $table->unsignedBigInteger('IDJenis');
            $table->unsignedBigInteger('NoPetugas');

            $table->foreign('IDUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('IDJenis')->references('IDJenis')->on('jenis_pelanggan')->onDelete('cascade');
            $table->foreign('NoPetugas')->references('NoPetugas')->on('petugas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};