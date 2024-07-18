<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;
    protected $fillable = ['dateArchive', 'idVehicule', 'idChauffeur'];

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
}
