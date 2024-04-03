<?php

namespace App\Http\Controllers;

use App\Models\ModePayement;
use Illuminate\Http\Request;

class modepayementsController extends Controller
{

    public function index()
    {
        $MdPayements = ModePayement::orderbydesc("id")->get();
        return view('Sadmin.MODE_PAYEMENT.liste', compact('MdPayements'));
    }
    public function afficher()
    {
        return view('Sadmin.MODE_PAYEMENT.craete');
    }
    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required|",
            "description" => "required|",
        ]);

        $ajouterVille = new ModePayement();
        $ajouterVille->nom = $request->nom;
        $ajouterVille->description = $request->description;
        $ajouterVille->save();
        return redirect()->route('liste_mode_payement')->with('success', ' la ville vient d\' être Enregistrer ');
    }
}