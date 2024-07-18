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
        Schema::create('carburants', function (Blueprint $table) {
            $table->id();
            $table->date('dateCarburant');
            $table->string('typeCarburant');
            $table->integer('qte');
            $table->decimal('prixCarburant');
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
        Schema::dropIfExists('carburants');
    }
};
