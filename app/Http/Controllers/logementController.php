<?php

namespace App\Http\Controllers;

use App\Models\logement;
use App\Models\maison;
use App\Models\quartiers;
use App\Models\type_logement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class logementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logements = Logement::join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
            ->join('quartiers', 'logements.quartier_id', '=', 'quartiers.id')
            ->orderByDesc('logements.id')
            ->select('logements.*', 'type_logements.nom AS type_logement_nom', 'quartiers.nom AS quartier_nom')
            ->get();

        return view("Sadmin.LOGEMENT.liste", compact("logements"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $MAIS = maison::orderByDesc("id")->get();
            $quartiers = quartiers::orderByDesc("id")->get();
            $typelogements = type_logement::orderByDesc("id")->get();
            return view("Sadmin.LOGEMENT.create", compact("MAIS", "quartiers", "typelogements"));
        } catch (\Exception $e) {
            // Gérer les erreurs éventuelles, par exemple, journaliser l'erreur
            Log::error("Une erreur s'est produite lors du chargement des données pour la création d'un logement : " . $e->getMessage());
            // Rediriger vers une page d'erreur ou afficher un message d'erreur
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer plus tard.');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $users_id = Auth::id();
        $request->validate([
            "photo" => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            "description" => "required",
            "adress" => "required",
            "MT_visite" => "required",
            "surperficie" => "required",
            "mt_logement_par_mois" => "required",
            "maison_id" => "required",

        ]);
        // dd($request);
        if ($request->hasFile("photo")) {
            $fileNameWithExt = $request->file("photo")->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file("photo")->getClientOriginalExtension();
            $fileNameToStore = $fileName . "_" . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/imagelogement', $fileNameToStore);

            $ajouterlogement = new logement;
            $ajouterlogement->description = $request->description;
            $ajouterlogement->adress = $request->adress;
            $ajouterlogement->MT_visite = $request->MT_visite;
            $ajouterlogement->surperficie = $request->surperficie;
            $ajouterlogement->mt_logement_par_mois = $request->mt_logement_par_mois;
            $ajouterlogement->photo = $fileNameToStore;
            $ajouterlogement->users_id = $users_id;
            $ajouterlogement->quartier_id = $request->quartier_id;
            $ajouterlogement->typelogement_id = $request->typelogement_id;
            $ajouterlogement->maison_id = $request->maison_id;
            $ajouterlogement->save();
            return redirect()->route('liste_logement')->with('success', ' le Quartier vient d\' être Enregistrer ');
        }
    }
    public function activer(Logement $logement)
    {
        $logement->update(['active' => true]);
        return redirect()->back()->with('success', 'Le logement a été activé avec succès');
    }

    public function desactiver(Logement $logement)
    {
        $logement->update(['active' => false]);
        return redirect()->back()->with('success', 'Le logement a été désactivé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(logement $logement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(logement $logement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, logement $logement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(logement $logement)
    {
        //
    }
}
