<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;
    protected $fillable = ['cnie', 'nomChauffeur', 'prenomChauffeur', 'adresse', 'dateNaissance', 'dateEntrer', 'tel', 'numPermis', 'dateExpPermis', 'totalExperience'];

    // Relation avec la table Archive
    public function archives()
    {
        return $this->hasMany(Archive::class, 'idChauffeur');
    }
    
}
