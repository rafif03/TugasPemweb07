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
        Schema::create('kasir', function (Blueprint $table) {
            $table->char('NoKasir', 10)->primary()->required;
            $table->char('Email', 50);
            $table->char('NoTelp', 20)->required;
            $table->char('NoRekening', 8)->required;
            $table->char('IDUser', 10)->required;

            $table->foreign('IDUser')->references('IDUser')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasir');
    }
};