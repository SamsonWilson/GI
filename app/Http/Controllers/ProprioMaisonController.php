<?php

namespace App\Http\Controllers;


use App\Models\maison;
use App\Models\proprietaire;
use App\Models\ProprioMaison;
use Illuminate\Http\Request;

class ProprioMaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proprietaires = proprietaire::orderbydesc("id")->get();
        $maisons = maison::orderbydesc("id")->get();
        return view('Sadmin.PROPRIO_MAISON.create', compact('proprietaires', 'maisons'));
    }
    public function affiche()
    {
        $PMaisons = ProprioMaison::join('maisons', 'proprio_maisons.maison_id', '=', 'maisons.id')
            ->join('proprietaires', 'proprio_maisons.proprietaire_id', '=', 'proprietaires.id')
            ->orderByDesc('proprio_maisons.id')
            ->select('proprio_maisons.*', 'maisons.nom AS maison_nom', 'maisons.c_postal AS maison_postal', 'maisons.nombrePiece AS maisons_nombrePierce', 'maisons.adresse AS maisons_adresse', 'proprietaires.nom AS pro_nom', 'proprietaires.prenom AS pro_prenom')
            ->get();
        return view('Sadmin.PROPRIO_MAISON.liste', compact('PMaisons'));
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
            "nombre_de_proprio" => 'required',
            "description" => "required",
        ]);
        // dd($request);
        $ajouterPMaison = new propriomaison;
        $ajouterPMaison->nombre_de_proprio = $request->nombre_de_proprio;
        $ajouterPMaison->description = $request->description;
        $ajouterPMaison->proprietaire_id = $request->proprietaire_id;
        $ajouterPMaison->maison_id = $request->maison_id;
        $ajouterPMaison->save();
        return redirect()->route('liste_Quartier')->with('success', ' le Quartier vient d\' être Enregistrer ');
        // dd($ajouterVille);
        // $datas = quartiers::orderbydesc("id")->get();
        // return View("admin.affichage", compact("datas"));

    }

    /**
     * Display the specified resource.
     */
    public function show(ProprioMaison $proprioMaison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProprioMaison $proprioMaison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProprioMaison $proprioMaison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProprioMaison $proprioMaison)
    {
        //
    }
}
