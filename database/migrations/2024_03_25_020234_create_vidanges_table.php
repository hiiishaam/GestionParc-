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
        Schema::create('vidanges', function (Blueprint $table) {
            $table->id();
            $table->date('dateVidange');
            $table->decimal('prixVidange');
            $table->integer('qte_huile');
            $table->string('ref_huile');
            $table->integer('kilometrage');
            $table->foreignId('idVehicule')->constrained('vehicules');
            $table->foreignId('idChauffeur')->constrained('chauffeurs');
            $table->foreignId('idStation')->constrained('stations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vidanges');
    }
};
