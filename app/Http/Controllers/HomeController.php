<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Competence;
use App\Models\Coordonnee;
use App\Models\Statistique;
use App\Models\Titre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $statistique = Statistique::all();

        $coordonnee = Coordonnee::all();

        $titre = Titre::all();

        $competence = Competence::all();

        $annee = Resume::all();
        
        return view('template.template', compact('statistique', 'coordonnee', 'titre', 'competence', 'annee'));
    }
}
