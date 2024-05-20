<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\facture;
use App\Models\location;
use App\Models\logement;
use App\Models\maison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class locationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $locations = location::join('logements', 'logements.id', '=', 'locations.logement_id')
            ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('clients', 'locations.client_id', '=', 'clients.id')
            // ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->orderByDesc('locations.id')
            ->select('locations.*', 'clients.nom AS client_nom', 'clients.prenom AS client_prenom', 'type_logements.nom AS Tlogement_nom', 'logements.mt_logement_par_mois AS logement_loyer', 'locations.date_debut AS location_Ddebut', 'locations.date_fin AS location_dfin', 'locations.avance AS location_avance', 'locations.caution AS location_caution', 'locations.Tcaution AS location_tcaution', 'locations.Tavance AS location_tavance', 'locations.Total AS location_total')
            ->get();
        return view('Sadmin.LOCATION.liste', compact("locations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $logements = logement::join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('maisons', 'maisons.id', '=', 'logements.maison_id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->orderByDesc('logements.id')
            ->select('logements.*', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.surperficie AS logement_superficie', 'logements.mt_logement_par_mois AS logement_loyer', 'maisons.nom as maison')
            ->get();
        return view('Sadmin.LOCATION.listeLogement', compact("logements"));
        // $clients = client::orderByDesc("id")->get();
        // $logements = logement::orderByDesc("id")->get();
        // return view("Sadmin.LOCATION.create", compact("clients"), compact("logements"));
    }
    public function ListeFinContrat()
    {
        $locations = location::join('logements', 'logements.id', '=', 'locations.logement_id')
            ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('maisons', 'maisons.id', '=', 'logements.maison_id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->join('clients', 'clients.id', '=', 'locations.client_id')
            ->orderByDesc('locations.id')
            ->select('locations.*', 'clients.nom as nomclient', 'clients.prenom as prenomclient', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.surperficie AS logement_superficie', 'logements.mt_logement_par_mois AS logement_loyer', 'maisons.nom as maison')
            // ->whereNotNull('locations.Mt_rembouser') // Exclure les lignes avec des valeurs nulles dans la colonne 'id' de 'locations'
            ->whereNull('locations.Mt_rembouser')
            ->whereNull('locations.date_fin')
            ->whereNull('locations.descrip_prelevement')
            ->whereNull('locations.Mt_prelever')
            ->get();

        return view('Sadmin.LOCATION.listeFinContrat', compact("locations"));


        // $clients = client::orderByDesc("id")->get();
        // $logements = logement::orderByDesc("id")->get();
        // return view("Sadmin.LOCATION.create", compact("clients"), compact("logements"));
    }

    public function ListeFinContratefectuer()
    {
        $locations = location::join('logements', 'logements.id', '=', 'locations.logement_id')
            ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('maisons', 'maisons.id', '=', 'logements.maison_id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->join('clients', 'clients.id', '=', 'locations.client_id')
            ->orderByDesc('locations.id')
            ->select('locations.*', 'clients.nom as nomclient', 'clients.prenom as prenomclient', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.surperficie AS logement_superficie', 'logements.mt_logement_par_mois AS logement_loyer', 'maisons.nom as maison')
            ->whereNotNull('locations.Mt_rembouser') // Exclure les lignes avec des valeurs nulles dans la colonne 'id' de 'locations'            ->whereNull('locations.date_fin')
            ->whereNotNull('locations.descrip_prelevement')
            ->whereNotNull('locations.Mt_prelever')
            ->get();

        return view('Sadmin.LOCATION.ListeFinContratDejaEfectuer', compact("locations"));


        // $clients = client::orderByDesc("id")->get();
        // $logements = logement::orderByDesc("id")->get();
        // return view("Sadmin.LOCATION.create", compact("clients"), compact("logements"));
    }
    public function affichage()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "date_debut" => 'required',
            "date_finavance" => "required",
            "avance" => "required",
            "caution" => "required",
            "Tavance" => "required",
            "Tcaution" => "required",
            "Total" => "required",
            "commision" => "required"

        ]);
        // dd($request);

        $ajouterlogement = new location;

        $ajouterlogement->date_debut = $request->date_debut;
        $ajouterlogement->avance = $request->avance;
        $ajouterlogement->caution = $request->caution;
        $ajouterlogement->Tavance = $request->Tavance;
        $ajouterlogement->Tcaution = $request->Tcaution;
        $ajouterlogement->Total = $request->Total;
        $ajouterlogement->date_finavance = $request->date_finavance;
        $ajouterlogement->commision = $request->commision;

        $ajouterlogement->client_id = $request->client_id;
        $ajouterlogement->logement_id = $request->logement_id;
        $ajouterlogement->save();

        $logement = Logement::find($request->logement_id);
        if ($logement) {
            $logement->active = false; // désactiver le logement
            $logement->save();
            // return redirect()->route('liste_l')->with('success', ' le Quartier vient d\' être Enregistrer ');

        }
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
    public function edit($id)
    {
        $clients = client::orderbydesc("id")->get();
        $logements = logement::find($id)
            ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('maisons', 'maisons.id', '=', 'logements.maison_id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->orderByDesc('logements.id')
            ->select('logements.*', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.surperficie AS logement_superficie', 'logements.mt_logement_par_mois AS logement_loyer', 'maisons.nom as maison', 'maisons.tx_commission as txCommission')
            ->get();
        return view('Sadmin.LOCATION.create', compact('logements', 'clients'));
    }
    public function contrat($id)
    {
        //     $factures = facture::orderbydesc("id")->get();
        //     $locations = DB::table('locations')
        //         // $locations = location::find($contrat)
        //         // location::find($contrat)
        //         ->join('logements', 'logements.id', '=', 'locations.logement_id')
        //         ->join('maisons', 'maisons.id', '=', 'logements.maison_id')
        //         ->join('clients', 'clients.id', '=', 'locations.client_id')
        //         ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
        //         ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
        //         ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
        //         ->where('locations.id', $contrat)
        //         ->orderByDesc('locations.id')
        //         ->select('locations.*', 'clients.nom as nom_client', 'clients.prenom as prenom_client', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.surperficie AS logement_superficie', 'logements.mt_logement_par_mois AS logement_loyer', 'maisons.nom as maison')
        //         ->get();

        //     return view('Sadmin.LOCATION.finContrat', compact('locations', 'factures'));

        $locations = location::join('logements', 'logements.id', '=', 'locations.logement_id')
            ->join('maisons', 'maisons.id', '=', 'logements.maison_id')
            ->join('clients', 'clients.id', '=', 'locations.client_id')
            ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->where('locations.id', $id)
            ->orderByDesc('locations.id')
            ->select('locations.*', 'clients.nom as nom_client', 'clients.prenom as prenom_client', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.surperficie AS logement_superficie', 'logements.mt_logement_par_mois AS logement_loyer', 'maisons.nom as maison')
            ->get();

        $factures = facture::orderByDesc("id")->get();
        // $clients = client::orderByDesc("id")->get();

        return view('Sadmin.LOCATION.finContrat', compact('locations', 'factures'));
    }


    public function DetailFinContrat($DFid)
    {
        $locations = location::join('logements', 'logements.id', '=', 'locations.logement_id')
            ->join('maisons', 'maisons.id', '=', 'logements.maison_id')
            ->join('clients', 'clients.id', '=', 'locations.client_id')
            ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->where('locations.id', $DFid)
            ->orderByDesc('locations.id')
            ->select('locations.*', 'clients.nom as nom_client', 'clients.prenom as prenom_client', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.surperficie AS logement_superficie', 'logements.mt_logement_par_mois AS logement_loyer', 'maisons.nom as maison')
            ->get();
        $factures = facture::orderByDesc("id")->get();
        return view('Sadmin.LOCATION.DetailFinContrat', compact('locations', 'factures'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function updateFinContrat(Request $request, $contrat)
    {
        $this->validate($request, [
            'descrip_prelevement' => 'required|',
            'Mt_prelever' => 'required',
            'Mt_rembouser' => 'required',
            'date_fin' => 'required'

        ], [
            'descrip_prelevement.required' => 'Le champ est Vide.',
            'Mt_prelever.required' => 'Le champ est Vide.',
            'Mt_rembouser.required' => 'Le champ est Vide.',
            'date_fin.required' => 'Le champ est Vide.',



        ]);
        $locations = location::find($contrat);
        $locations->descrip_prelevement = $request->descrip_prelevement;
        $locations->Mt_prelever = $request->Mt_prelever;
        $locations->Mt_rembouser = $request->Mt_rembouser;
        $locations->date_fin = $request->date_fin;
        // $locations->update($request->all());
        $locations->save();
        // $datas = Ville::orderbydesc("id")->get();
        // return View("sadmin.liste", compact("datas"));
        return redirect()->route('sadmin')->with('success', ' la ville vient d\' être Enregistrer ');
    }
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