<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use App\Models\Vehicule;
use App\Models\Chauffeur;
use App\Models\Carburant;

class statisticController extends Controller
{
    public function Statistique(){

        $countvehicules = Vehicule::count(); 
        $countchauffeurs = Chauffeur::count();
        $countmaintenance = Maintenance::count(); 
        $countcarburants = Carburant::count();
        return view('dashboard', compact('countvehicules', 'countchauffeurs', 'countmaintenance', 'countcarburants'));

    }

   
}
