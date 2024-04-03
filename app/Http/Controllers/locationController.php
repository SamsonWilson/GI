<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\location;
use App\Models\logement;
use Illuminate\Http\Request;

class locationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = client::orderByDesc("id")->get();
        $logements = logement::orderByDesc("id")->get();


        return view("Sadmin.LOCATION.liste", compact("clients"), compact("logements"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = client::orderByDesc("id")->get();
        $logements = logement::orderByDesc("id")->get();
        return view("Sadmin.LOGEMENT.create", compact("clients"), compact("logements"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "date_debut" => 'required',
            "date_fin" => "required",

        ]);
        // dd($request);

        $ajouterlogement = new location;
        $ajouterlogement->date_debut = $request->date_debut;
        $ajouterlogement->date_fin = $request->date_fin;

        $ajouterlogement->client_id = $request->client_id;
        $ajouterlogement->logement_id = $request->logement_id;
        $ajouterlogement->save();
        // return redirect()->route('liste_l')->with('success', ' le Quartier vient d\' être Enregistrer ');

    }

    /**
     * Display the specified resource.
     */
    public function show(location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(location $location)
    {
        //
    }
}
