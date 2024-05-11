<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\typeClient;
use Illuminate\Http\Request;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $clients = client::leftJoin('type_clients', 'clients.typeclient_id', '=', 'type_clients.id')
            ->orderByDesc('clients.id')
            ->selectRaw('clients.*, COALESCE(type_clients.nom, "visite") AS type_clients_nom, clients.nom as client_nom , clients.adress as client_adress , clients.tel1 as client_tel1, clients.tel2 as client_tel2,clients.email as client_email')
            ->get();

        return view("Sadmin.CLIENT.liste", compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function affichage()
    {
        $Tclients = typeClient::orderByDesc("id")->get();
        return view("Sadmin.CLIENT.create", compact('Tclients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required|",
            "prenom" => "required",
            "tel1" => "required",
            "tel2" => "required",
            "email" => "required",
            "adress" => "required",
            "sexe" => "required",

        ]);
        $ajouterClient = new client();
        $ajouterClient->nom = $request->nom;
        $ajouterClient->prenom = $request->prenom;
        $ajouterClient->adress = $request->adress;
        $ajouterClient->tel1 = $request->tel1;
        $ajouterClient->tel2 = $request->tel2;
        $ajouterClient->email = $request->email;
        $ajouterClient->sexe = $request->sexe;
        // $ajouterClient->quartier_id = $request->quartier_id;
        $ajouterClient->typeclient_id = $request->typeclient_id;
        $ajouterClient->save();
        return redirect()->route('liste_client')->with('success', ' le Quartier vient d\' être Enregistrer ');
    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        //
    }
}