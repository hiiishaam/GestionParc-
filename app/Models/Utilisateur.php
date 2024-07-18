<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = ['nomComplete', 'photo', 'email', 'login', 'password'];

    // Relation avec la table Archive
    public function archives()
    {
        return $this->hasMany(Archive::class, 'idUtilisateur');
    }
}
