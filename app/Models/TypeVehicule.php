<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVehicule extends Model
{
    use HasFactory;
    protected $fillable = ['typeVehicule'];

    // Relation avec la table Vehicule
    public function vehicules()
    {
        return $this->hasMany(Vehicule::class, 'idTypeVehicule');
    }
}
