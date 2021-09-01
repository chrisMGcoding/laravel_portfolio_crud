<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index() {
        
        $photo = Photo::all();

        return view('crud.photocrud', compact('photo'));
    }

    public function store(Request $request) {
        request()->validate([
            "nom"=>["required"],
        ]);

        $photo = new Photo;

        $photo->nom = $request->nom;
        $photo->save();

        return redirect()->route('photo');
    }

    public function destroy($id) {
        $photo = Photo::find($id);
        $photo->delete();

        return redirect()->back();
    }

    public function show($id) {
        $photo = Photo::find($id);
        return view('crud.photoshow', compact('photo'));
    }

    public function edit($id) {
        $photo = Photo::find($id);
        return view('crud.photoupdate', compact('photo'));
    }

    public function update($id, Request $request) {
        request()->validate([
            "nom"=>["required"],
        ]);

        $photo = Photo::find($id);

        $photo->nom = $request->nom;
        $photo->save();

        return redirect()->route('photo');
    }
}
