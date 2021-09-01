<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Coordonnee;
use App\Models\Resume;
use App\Models\Statistique;
use App\Models\Titre;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{
    public function index() {
        
        $statistique = Statistique::all();
        $coordonnee = Coordonnee::all();
        $titre = Titre::all();
        $competence = Competence::all();
        $annee = Resume::all();

        return view('crud.competencecrud', compact('statistique', 'coordonnee', 'titre', 'competence', 'annee'));
    }

    public function store(Request $request) {
        request()->validate([
            "competence"=>["required"],
            "pourcentage"=>["required"]
        ]);

        $competence = new Competence;

        $competence->competence = $request->competence;
        $competence->pourcentage = $request->pourcentage;
        $competence->save();

        return redirect()->route('competence');
    }

    public function destroy($id) {
        $competence = Competence::find($id);
        $competence->delete();

        return redirect()->back();
    }

    public function show($id) {
        $competence = Competence::find($id);
        return view('crud.competenceshow', compact('competence'));
    }

    public function edit($id) {
        $competence = Competence::find($id);
        return view('crud.competenceupdate', compact('competence'));
    }

    public function update($id, Request $request) {
        request()->validate([
            "competence"=>["required"],
            "pourcentage"=>["required"]
        ]);

        $competence = Competence::find($id);

        $competence->competence = $request->competence;
        $competence->pourcentage = $request->pourcentage;
        $competence->save();

        return redirect()->route('competence');
    }
}
