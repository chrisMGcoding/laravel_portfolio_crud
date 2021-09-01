<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Coordonnee;
use App\Models\Resume;
use App\Models\Statistique;
use App\Models\Titre;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        
        $statistique = Statistique::all();
        $coordonnee = Coordonnee::all();
        $titre = Titre::all();
        $competence = Competence::all();
        $annee = Resume::all();

        return view('crud.aboutcrud', compact('statistique', 'coordonnee', 'titre', 'competence', 'annee'));
    }

    public function store(Request $request) {
        request()->validate([
            "titre"=>["required"],
            "description"=>["required"]
        ]);

        $titre = new Titre;

        $titre->titre = $request->titre;
        $titre->description = $request->description;
        $titre->save();

        return redirect()->route('about');
    }

    public function destroy($id) {
        $titre = Titre::find($id);
        $titre->delete();

        return redirect()->back();
    }

    public function show($id) {
        $titre = Titre::find($id);
        return view('crud.aboutshow', compact('titre'));
    }

    public function edit($id) {
        $titre = Titre::find($id);
        return view('crud.aboutupdate', compact('titre'));
    }

    public function update($id, Request $request) {
        request()->validate([
            "titre"=>["required"],
            "description"=>["required"]
        ]);

        $titre = Titre::find($id);

        $titre->titre = $request->titre;
        $titre->description = $request->description;
        $titre->save();

        return redirect()->route('about');
    }
}
