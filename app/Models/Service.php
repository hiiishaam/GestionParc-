<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['nomService'];

    // Relation avec la table Vehicule
    public function vehicules()
    {
        return $this->hasMany(Vehicule::class, 'idService');
    }
}
