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
            $table->char('NoPelanggan', 10)->primary()->required;
            $table->char('NoTelp', 20)->required;
            $table->char('Alamat', 100)->required;
            $table->char('Email', 50);
            $table->char('IDUser', 10)->required;
            $table->char('IDJenis', 10)->required;
            $table->char('NoPetugas', 10)->required;

            $table->foreign('IDUser')->references('IDUser')->on('users');
            $table->foreign('IDJenis')->references('IDJenis')->on('jenis_pelanggan');
            $table->foreign('NoPetugas')->references('NoPetugas')->on('petugas');
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