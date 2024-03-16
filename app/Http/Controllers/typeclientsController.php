<?php

namespace App\Http\Controllers;

use App\Models\typeClient;
use Illuminate\Http\Request;

class typeclientsController extends Controller
{
    public function index()
    {

        $typeClients = typeClient::orderbydesc("id")->get();
        return view("Sadmin.TypeClient.liste", compact('typeClients'));
        // return view("auth.login");
    }

    public function affichage()
    {
        return view("Sadmin.TypeClient.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required|",
            "description" => "required",
        ]);
        $ajouterTClient = new typeClient();
        $ajouterTClient->nom = $request->nom;
        $ajouterTClient->description = $request->description;
        $ajouterTClient->save();
        return redirect()->route('liste_typeclient')->with('success', ' le Quartier vient d\' être Enregistrer ');
    }
}