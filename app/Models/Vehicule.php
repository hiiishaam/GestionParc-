<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = ['matricule', 'nom', 'model', 'fabriquePar', 'dateExp', 'etat', 'kilometrage', 'idTypeVehicule', 'idService'];

    // Relation avec la table TypeVehicule
    public function typeVehicule()
    {
        return $this->belongsTo(TypeVehicule::class, 'idTypeVehicule');
    }

    // Relation avec la table Service
    public function service()
    {
        return $this->belongsTo(Service::class, 'idService');
    }


 
}
