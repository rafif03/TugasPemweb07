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
        Schema::create('petugas', function (Blueprint $table) {
            $table->char('NoPetugas', 10)->primary()->required;
            $table->char('NoTelp', 10)->required;
            $table->char('Area', 50)->required;
            $table->char('IDUser', 10)->required;

            $table->foreign('IDUser')->references('IDUser')->on('users');
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