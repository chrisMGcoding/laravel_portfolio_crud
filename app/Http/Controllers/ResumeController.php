<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Coordonnee;
use App\Models\Resume;
use App\Models\Statistique;
use App\Models\Titre;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index() {

        $statistique = Statistique::all();
        $coordonnee = Coordonnee::all();
        $titre = Titre::all();
        $competence = Competence::all();
        $annee = Resume::all();

        return view('crud.resumecrud',  compact('statistique', 'coordonnee', 'titre', 'competence', 'annee'));
    }

    public function store(Request $request) {
        request()->validate([
            "annee"=>["required"],
        ]);

        $annee = new Resume;

        $annee->annee = $request->annee;
        $annee->save();

        return redirect()->route('resume');
    }

    public function destroy($id) {
        $annee = Resume::find($id);
        $annee->delete();

        return redirect()->back();
    }

    public function show($id) {
        $annee = Resume::find($id);
        return view('crud.resumeshow', compact('annee'));
    }

    public function edit($id) {
        $annee = Resume::find($id);
        return view('crud.resumeupdate', compact('annee'));
    }

    public function update($id, Request $request) {
        request()->validate([
            "annee"=>["required"],
        ]);

        $annee = Resume::find($id);

        $annee->annee = $request->annee;
        $annee->save();

        return redirect()->route('resume');
    }
}
