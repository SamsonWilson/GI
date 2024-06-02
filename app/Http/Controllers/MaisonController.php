<?php

namespace App\Http\Controllers;

use App\Models\maison;
use Illuminate\Http\Request;

class MaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Sadmin.MAISON.liste');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "c_postal" => "required|unique:proprietaires,tel1",
            "nombrePiece" => "required",
            "adresse" => "required",
            "tx_commission" => "required",
        ], [
            'nom.required' => 'Le champ est Vide.',
            'c_postal.required' => 'Le champ est Vide.',
            'c_postal.unique' => 'le numero est déja utiliser.',
            'nombrePiece.required' => 'Le champ est Vide.',
            'adresse.required' => 'Le champ est Vide.',
            'tx_commission.required' => 'Le champ est Vide.',


        ]);
        // dd($request);

        $ajouterMaison = new maison();
        $ajouterMaison->nom = $request->nom;
        $ajouterMaison->c_postal = $request->c_postal;
        $ajouterMaison->nombrePiece = $request->nombrePiece;
        $ajouterMaison->adresse = $request->adresse;
        $ajouterMaison->tx_commission = $request->tx_commission;
        $ajouterMaison->save();
        // $datas = Ville::orderbydesc("id")->get();
        // return View("sadmin.liste", compact("datas"));
        return redirect()->route('ajouter_P_M')->with('success', 'La ville vient d\'être enregistrée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(maison $maison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(maison $maison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, maison $maison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(maison $maison)
    {
        //
    }
    public function afficher()
    {
        return view('Sadmin.PROPRIETAIRE.create');
    }
}
