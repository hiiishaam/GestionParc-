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
        Schema::create('_utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nomComplete');
            $table->string('photo')->nullable();
            $table->string('email')->unique();
            $table->string('login')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_utilisateurs');
    }
};