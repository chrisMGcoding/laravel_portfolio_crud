<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Coordonnee;
use App\Models\Resume;
use App\Models\Titre;
use App\Models\Statistique;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index() {

        $statistique = Statistique::all();
        $coordonnee = Coordonnee::all();
        $titre = Titre::all();
        $competence = Competence::all();
        $annee = Resume::all();

        return view('crud.factscrud', compact('statistique', 'coordonnee', 'titre', 'competence', 'annee'));
    }

    public function store(Request $request) {
        request()->validate([
            "titre"=>["required"],
            "nombre"=>["required"]
        ]);

        $statistique = new Statistique;

        $statistique->titre = $request->titre;
        $statistique->nombre = $request->nombre;
        $statistique->save();

        return redirect()->route('facts');
    }

    public function destroy($id) {
        $statistique = Statistique::find($id);
        $statistique->delete();

        return redirect()->back();
    }

    public function show($id) {
        $statistique = Statistique::find($id);
        return view('crud.factsshow', compact('statistique'));
    }

    public function edit($id) {
        $statistique = Statistique::find($id);
        return view('crud.factsupdate', compact('statistique'));
    }

    public function update($id, Request $request) {
        request()->validate([
            "titre"=>["required"],
            "nombre"=>["required"]
        ]);

        $statistique = Statistique::find($id);

        $statistique->titre = $request->titre;
        $statistique->nombre = $request->nombre;
        $statistique->save();

        return redirect()->route('facts');
    }

}
