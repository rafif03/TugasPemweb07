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
        Schema::create('users', function (Blueprint $table) {
            $table->char('IDUser', 10)->primary()->required;
            $table->char('NamaUser', 100)->required;
            $table->char('Username', 50)->required;
            $table->char('PassUser', 50)->required;
            $table->char('IDRole', 10)->required;

            $table->foreign('IDRole')->references('IDRole')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};