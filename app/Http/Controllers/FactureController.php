<?php

namespace App\Http\Controllers;

use App\Models\facture;
use App\Http\Requests\StorefactureRequest;
use App\Http\Requests\UpdatefactureRequest;
use App\Models\location;
use App\Models\logement;
use App\Models\ModePayement;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $locations = location::join('logements', 'locations.logement_id', '=', 'logements.id')
            ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->join('clients', 'locations.client_id', '=', 'clients.id')
            ->orderByDesc('locations.id')
            ->select('locations.*', 'locations.date_debut AS location_date_debut', 'clients.nom AS clients_nom', 'clients.prenom AS clients_prenom', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.nom AS logement_nom')
            ->get();
        // 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.photo AS logement_photo'



        return view("Sadmin.FACTURE.liste", compact("locations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function affichage()
    {
        return view('Sadmin.FACTURE.detail');
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
            "location_id" => "required"

        ]);
        // dd($request);

        $ajouterfacture = new facture;
        $ajouterfacture->date_payement = $request->date_payement;
        $ajouterfacture->mode_payement_id = $request->mode_payement_id;
        $ajouterfacture->mois_payer = $request->mois_payer;
        $ajouterfacture->location_id = $request->location_id;
        $ajouterfacture->save();
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
        $locations = location::find($id)
            ->join('logements', 'locations.logement_id', '=', 'logements.id')
            ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
            ->join('clients', 'locations.client_id', '=', 'clients.id')
            ->orderByDesc('locations.id')
            ->select('locations.*', 'clients.tel1 AS clients_tel1', 'clients.tel2 AS clients_tel2', 'clients.email AS clients_email', 'clients.nom AS clients_nom', 'clients.email AS clients_email', 'clients.prenom AS clients_prenom', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom', 'villes.nom AS ville_nom', 'logements.nom AS logement_nom')
            ->get();

        return view('Sadmin.FACTURE.hugu', compact('locations', 'MDPS'));
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
