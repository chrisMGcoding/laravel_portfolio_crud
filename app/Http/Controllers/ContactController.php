<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Coordonnee;
use App\Models\Resume;
use App\Models\Titre;
use App\Models\Statistique;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {

        $statistique = Statistique::all();
        $coordonnee = Coordonnee::all();
        $titre = Titre::all();
        $competence = Competence::all();
        $annee = Resume::all();

        return view('crud.contactcrud', compact('statistique', 'coordonnee', 'titre', 'competence', 'annee'));
    }

    public function store(Request $request) {
        request()->validate([
            "website"=>["required"],
            "phone"=>["required"],
            "anniversaire"=>["required"],
            "ville"=>["required"],
            "age"=>["required"],
            "diplome"=>["required"],
            "email"=>["required"],
            "freelance"=>["required"],
        ]);

        $coordonnee = new Coordonnee;
        
        $coordonnee->anniversaire = $request->anniversaire;
        $coordonnee->website = $request->website;
        $coordonnee->phone = $request->phone;
        $coordonnee->ville = $request->ville;
        $coordonnee->age = $request->age;
        $coordonnee->diplome = $request->diplome;
        $coordonnee->email = $request->email;
        $coordonnee->freelance = $request->freelance;
        $coordonnee->save();

        return redirect()->route('contact');
    }

    public function destroy($id) {
        $coordonnee = Coordonnee::find($id);
        $coordonnee->delete();

        return redirect()->back();
    }

    public function show($id) {
        $coordonnee = Coordonnee::find($id);
        return view('crud.contactshow', compact('coordonnee'));
    }

    public function edit($id) {
        $coordonnee = Coordonnee::find($id);
        return view('crud.contactupdate', compact('coordonnee'));
    }

    public function update($id, Request $request) {
        request()->validate([
            "website"=>["required"],
            "phone"=>["required"],
            "anniversaire"=>["required"],
            "ville"=>["required"],
            "age"=>["required"],
            "diplome"=>["required"],
            "email"=>["required"],
            "freelance"=>["required"],
        ]);

        $coordonnee = Coordonnee::find($id);

        $coordonnee->website = $request->website;
        $coordonnee->phone = $request->phone;
        $coordonnee->anniversaire = $request->anniversaire;
        $coordonnee->ville = $request->ville;
        $coordonnee->age = $request->age;
        $coordonnee->diplome = $request->diplome;
        $coordonnee->email = $request->email;
        $coordonnee->freelance = $request->freelance;
        $coordonnee->save();

        return redirect()->route('contact');
    }
}
