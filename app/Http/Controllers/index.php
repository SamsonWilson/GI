<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\logement;
use App\Models\quartiers;
use App\Models\typeClient;
use App\Models\Ville;
use App\Models\visite;
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
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->where('logements.active', true)
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


    public function EnreVisite(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "email" => "required",
            "tel1" => "required",
            "tel2" => "required",
            "adress" => "required",

        ]);

        $ajouterClient = new client;
        $ajouterClient->nom = $request->nom;
        $ajouterClient->prenom = $request->prenom;
        $ajouterClient->adress = $request->adress;
        $ajouterClient->email = $request->email;
        $ajouterClient->tel1 = $request->tel1;
        $ajouterClient->tel2 = $request->tel2;
        // $defaultForeignKeyValue = '1'; // Valeur par défaut de la clé étrangère
        // $ajouterClient->typeclient_id  = $request->filled('typeclient_id ') ? $request->typeclient_id : $defaultForeignKeyValue;
        $ajouterClient->save();

        $ajouterVisite = new visite();
        $ajouterVisite->client_id = $ajouterClient->id;
        $ajouterVisite->logement_id = $request->logement_id;
        $ajouterVisite->save();




        // $datas = Ville::orderbydesc("id")->get();
        // return View("sadmin.liste", compact("datas"));
        // return redirect()->route('vis')->with('success', ' la ville vient d\' être Enregistrer ');
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
        $Tclients = typeClient::orderbydesc("id")->get();
        $logement = Logement::join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id') // Jointure avec la table `villes`
            ->orderByDesc('logements.id')
            ->select('logements.*', 'type_logements.nom AS type_logement_nom', 'quartiers.imagequartier AS quartier_image', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'villes.imageville AS ville_image') // Sélection du nom de la ville
            ->find($id);
        return view('user', compact('logement', 'Tclients'));
        // $logement = logement::find($id);
        // return view('user', compact('logement'));
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
