<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $fillable = ['nomStation'];

    // Relation avec la table Carburant
    public function carburants()
    {
        return $this->hasMany(Carburant::class, 'idStation');
    }

    // Relation avec la table Vidange
    public function vidanges()
    {
        return $this->hasMany(Vidange::class, 'idStation');
    }
}
