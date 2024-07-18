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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->date('date_visite')->default(DB::raw('CURRENT_DATE'))->change();
            $table->decimal('prix_visite');
            $table->string('lieux_visite');
            $table->string('commentaire')->nullable();
            $table->foreignId('idVehicule')->constrained('vehicules');
            $table->foreignId('idChauffeur')->constrained('chauffeurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
