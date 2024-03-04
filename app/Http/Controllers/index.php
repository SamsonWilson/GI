<?php

namespace App\Http\Controllers;

use App\Models\logement;
use App\Models\quartiers;
use App\Models\Ville;
use Illuminate\Http\Request;

class index extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Ville::orderbydesc("id")->get();
        // $quartiers = quartiers::orderbydesc("id")->get();
        $logements = Logement::join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id') // Jointure avec la table `villes`
            ->orderByDesc('logements.id')
            ->select('logements.*', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom') // Sélection du nom de la ville
            ->get();
        return View("welcome", compact("datas", "logements"));
        // return view("auth.login");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auth.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
