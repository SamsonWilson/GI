<?php

namespace App\Http\Controllers;

use App\Mail\FactureCreatedMail;
use App\Models\facture;
use App\Http\Requests\StorefactureRequest;
use App\Http\Requests\UpdatefactureRequest;
use App\Models\location;
use App\Models\logement;
use App\Models\ModePayement;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;


class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $locations = DB::table('locations')
        //     ->leftJoin('factures', 'factures.location_id', '=', 'locations.id')
        //     ->join('logements', 'locations.logement_id', '=', 'logements.id')
        //     ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
        //     ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
        //     ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
        //     ->join('clients', 'locations.client_id', '=', 'clients.id')
        //     ->orderByDesc('locations.id')
        //     ->select(
        //         'locations.*',
        //         'locations.date_debut AS location_date_debut',
        //         DB::raw('CASE
        //         WHEN factures.location_id IS NOT NULL
        //         THEN factures.mois_payer
        //         ELSE locations.date_finavance
        //      END AS date_finavance_or_mois_payer'),
        //         'clients.nom AS clients_nom',
        //         'clients.prenom AS clients_prenom',
        //         'type_logements.nom AS type_logement_nom',
        //         'quartiers.nom AS quartier_nom',
        //         'villes.nom AS ville_nom'
        //     )
        //     ->get();

        // return view("Sadmin.FACTURE.liste", compact("locations"));



        $latestFactures = DB::table('factures')
            ->select('factures.*')
            ->join(
                DB::raw('(SELECT MAX(id) as id FROM factures GROUP BY location_id) as latest_factures'),
                'factures.id',
                '=',
                'latest_factures.id'
            );

        // Main query to get the required information
        $locations = DB::table('locations')
            ->leftJoinSub($latestFactures, 'factures', 'factures.location_id', '=', 'locations.id')
            ->join('logements', 'locations.logement_id', '=', 'logements.id')
            ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->join('clients', 'locations.client_id', '=', 'clients.id')
            ->orderByDesc('locations.id')
            ->select(
                'locations.*',
                'locations.date_debut AS location_date_debut',
                DB::raw('CASE
                    WHEN factures.location_id IS NOT NULL
                    THEN factures.mois_payer
                    ELSE locations.date_finavance
                 END AS date_finavance_or_mois_payer'),
                'clients.nom AS clients_nom',
                'clients.prenom AS clients_prenom',
                'type_logements.nom AS type_logement_nom',
                'quartiers.nom AS quartier_nom',
                'villes.nom AS ville_nom'
            )
            ->get();

        return view("Sadmin.FACTURE.liste", compact("locations"));



        // $locations = facture::join('locations', 'factures.location_id', '=', 'locations.id')
        //     ->join('logements', 'locations.logement_id', '=', 'logements.id')
        //     ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
        //     ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
        //     ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
        //     ->join('clients', 'locations.client_id', '=', 'clients.id')
        //     ->orderByDesc('locations.id')
        //     ->select(
        //         'locations.*',
        //         'locations.date_debut AS location_date_debut',
        //         DB::raw('CASE
        //                     WHEN factures.location_id = locations.id
        //                     THEN factures.mois_payer
        //                     ELSE locations.date_finavance
        //                  END AS date_finavance_or_mois_payer'),
        //         'clients.nom AS clients_nom',
        //         'clients.prenom AS clients_prenom',
        //         'type_logements.nom AS type_logement_nom',
        //         'quartiers.nom AS quartier_nom',
        //         'villes.nom AS ville_nom'
        //     )
        //     ->get();

        // return view("Sadmin.FACTURE.liste", compact("locations"));









    }

    /**
     * Show the form for creating a new resource.
     */
    public function affichage()
    {
        // $factures = facture::join('locations', 'factures.location_id', '=', 'locations.id')
        //     ->join('logements', 'locations.logement_id', '=', 'logements.id')
        //     ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
        //     ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
        //     ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
        //     ->join('clients', 'locations.client_id', '=', 'clients.id')
        //     ->join(DB::raw('(SELECT MAX(mois_payer) AS latest_month, client_id FROM factures GROUP BY client_id) AS latest_factures'), function ($join) {
        //         $join->on('factures.mois_payer', '=', 'latest_factures.latest_month')
        //             ->on('locations.client_id', '=', 'latest_factures.client_id');
        //     })
        //     ->orderByDesc('factures.id')
        //     ->select('factures.*', 'factures.mois_payer as facture_mois_payer', 'locations.date_debut AS location_date_debut', 'locations.date_fin AS location_date_fin', 'clients.nom AS clients_nom', 'clients.prenom AS clients_prenom', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.nom AS logement_nom')
        //     ->groupBy('clients.id') // Regrouper par l'ID du client
        //     ->get();

        // return view('Sadmin.FACTURE.listesF', compact("factures"));

        $factures = facture::join('locations', 'factures.location_id', '=', 'locations.id')
            ->join('logements', 'locations.logement_id', '=', 'logements.id')
            ->join('maisons', 'maisons.id', '=', 'logements.maison_id')
            ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->join('clients', 'locations.client_id', '=', 'clients.id')
            ->join('mode_payements', 'factures.mode_payement_id', '=', 'mode_payements.id')
            ->join(DB::raw('(SELECT MAX(id) AS max_id FROM factures GROUP BY location_id) AS latest_factures'), function ($join) {
                $join->on('factures.id', '=', 'latest_factures.max_id');
            })
            ->orderByDesc('factures.id')
            ->select('factures.*', 'factures.mois_payer as facture_mois_payer', 'locations.date_debut AS location_date_debut', 'locations.date_fin AS location_date_fin', 'clients.nom AS clients_nom', 'clients.prenom AS clients_prenom', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'mode_payements.nom as mode_payer', 'maisons.nom as maison')
            ->groupBy('factures.id', 'factures.updated_at', 'factures.created_at', 'factures.mois_payer', 'factures.date_payement', 'factures.location_id', 'factures.mode_payement_id', 'locations.date_debut', 'locations.date_fin', 'clients.nom', 'clients.prenom', 'type_logements.nom', 'quartiers.nom', 'villes.nom', 'clients.id', 'mode_payements.nom', 'maisons.nom')
            ->get();

        return view('Sadmin.FACTURE.listesF', compact("factures"));







        // $factures = facture::join('locations', 'factures.location_id', '=', 'locations.id')
        //     ->join('logements', 'locations.logement_id', '=', 'logements.id')
        //     ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
        //     ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
        //     ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
        //     ->join('clients', 'locations.client_id', '=', 'clients.id')
        //     ->orderByDesc('factures.id')
        //     ->select('factures.*', 'factures.mois_payer as facture_mois_payer', 'locations.date_debut AS location_date_debut', 'locations.date_fin AS location_date_fin', 'clients.nom AS clients_nom', 'clients.prenom AS clients_prenom', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.nom AS logement_nom')
        //     ->get();
        // return view('Sadmin.FACTURE.listesF', compact("factures"));
    }
    public function create()
    {

        // // Récupérez les données du formulaire de création de facture depuis la demande
        // $invoiceData = $request->all();

        // // Créez un objet Dompdf
        // $pdf = new Dompdf();

        // // Chargez la vue Blade contenant le formulaire de création de facture
        // $view = View::make('Sadmin.FACTURE.pdf', ['invoiceData' => $invoiceData]);

        // // Chargez le contenu HTML dans Dompdf
        // $pdf->loadHtml($view->render());

        // // Rendez le PDF
        // $pdf->render();

        // // Affichez le PDF dans le navigateur
        // return $pdf->stream('invoice.pdf');
        // $pdf = new Dompdf();
        // $view = View::make('Sadmin.FACTURE.pdf');
        // $pdf->loadHtml($view->render());
        // $pdf->render();
        // return $pdf->stream('document.pdf');
        return view('Sadmin.FACTURE.hugu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "date_payement" => "required",
            "mode_payement_id" => 'required',
            "mois_payer" => "required",
            "location_id" => "required",
            // ' DJregler' => 'required'

        ]);
        // dd($request);

        $ajouterfacture = new facture;
        $ajouterfacture->date_payement = $request->date_payement;
        $ajouterfacture->mode_payement_id = $request->mode_payement_id;
        $ajouterfacture->mois_payer = $request->mois_payer;
        $ajouterfacture->location_id = $request->location_id;
        $ajouterfacture->save();

        // Récupérer la location associée
        $location = Location::find($request->location_id);

        if ($location) {
            // Récupérer le client associé à la location
            $client = $location->client;

            if ($client) {
                // Envoyer un email de confirmation de paiement de facture
                Mail::to($client->email)->send(new FactureCreatedMail($ajouterfacture));
            }
        }

        // $location = new location();
        // $location->DJregler = $request->DJregler;
        // $location->save();


        // $location = Location::find($request->location_id);
        // if ($location) {
        //     $location->DJregler = $request->DJregler;
        //     $location->save();
        // }



        // Répondre avec une redirection ou une réponse JSON, selon vos besoins
        // return response()->json(['message' => 'Facture enregistrée avec succès'], 200);
        // return redirect()->route('liste_l')->with('success', ' le Quartier vient d\' être Enregistrer ');
        return redirect()->route('listeFacture')->with('success', ' le Quartier vient d\' être Enregistrer ');
    }

    /**
     * Display the specified resource.
     */
    public function show(facture $facture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {


        $MDPS = ModePayement::orderbydesc("id")->get();
        $locationss = DB::table('locations')
            ->join('logements', 'locations.logement_id', '=', 'logements.id')
            ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->join('clients', 'locations.client_id', '=', 'clients.id')
            ->where('locations.id', $id)
            ->orderByDesc('locations.id')
            ->select('locations.*', 'clients.tel1 AS clients_tel1', 'clients.tel2 AS clients_tel2', 'clients.email AS clients_email', 'clients.nom AS clients_nom', 'clients.email AS clients_email', 'clients.prenom AS clients_prenom', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom')
            ->get();
        // $locationss = location::find($id)
        //     ->join('logements', 'locations.logement_id', '=', 'logements.id')
        //     ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
        //     ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
        //     ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
        //     ->join('clients', 'locations.client_id', '=', 'clients.id')
        //     ->orderByDesc('locations.id')
        //     ->select('locations.*', 'clients.tel1 AS clients_tel1', 'clients.tel2 AS clients_tel2', 'clients.email AS clients_email', 'clients.nom AS clients_nom', 'clients.email AS clients_email', 'clients.prenom AS clients_prenom', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.nom AS logement_nom')
        //     ->get();

        return view('Sadmin.FACTURE.hugu', compact('locationss', 'MDPS'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefactureRequest $request, facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(facture $facture)
    {
        //
    }
}