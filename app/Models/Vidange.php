<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vidange extends Model
{
    use HasFactory;
    
    protected $fillable = ['dateVidange', 'prixVidange', 'qte_huile', 'ref_huile', 'kilometrage', 'idVehicule', 'idChauffeur', 'idStation'];

    // Relation avec la table Vehicule
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class, 'idVehicule');
    }

    // Relation avec la table Chauffeur
    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class, 'idChauffeur');
    }

    // Relation avec la table Station
    public function station()
    {
        return $this->belongsTo(Station::class, 'idStation');
    }
}
