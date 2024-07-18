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
        Schema::create('chauffeurs', function (Blueprint $table) {
            $table->id();
            $table->string('cnie')->unique();
            $table->string('nomChauffeur');
            $table->string('prenomChauffeur');
            $table->string('adresse');
            $table->date('dateNaissance');
            $table->date('dateEntrer');
            $table->string('tel');
            $table->string('numPermis');
            $table->date('dateExpPermis');
            $table->integer('totalExperience');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chauffeurs');
    }
};
