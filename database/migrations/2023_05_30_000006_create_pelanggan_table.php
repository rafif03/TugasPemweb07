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
            $table->id();
            $table->char('NoTelp', 20);
            $table->char('Alamat', 100);
            $table->char('Email', 50);
            $table->unsignedBigInteger('IDUser');
            $table->unsignedBigInteger('IDJenis');
            $table->unsignedBigInteger('NoPetugas');

            $table->foreign('IDUser')->references('id')->on('users');
            $table->foreign('IDJenis')->references('id')->on('jenis_pelanggan');
            $table->foreign('NoPetugas')->references('id')->on('petugas');
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