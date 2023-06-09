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
        Schema::create('jenis_pelanggan', function (Blueprint $table) {
            $table->id('IDJenis');
            $table->integer('TarifPerKubik');
            $table->integer('TarifLebihBatasan');
            $table->integer('Batasan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_pelanggan');
    }
};