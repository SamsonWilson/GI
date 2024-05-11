<?php

namespace App\Http\Controllers;

use App\Models\proprietaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proprietaires = proprietaire::all();
        // join('logements', 'logements.id', '=', 'locations.logement_id')
        // ->join('type_logements', 'logements.typelogement_id', '=', 'type_logements.id')
        // ->join('clients', 'locations.client_id', '=', 'clients.id')
        // // ->join('villes', 'quartiers.ville_id', '=', 'villes.id')
        // ->orderByDesc('locations.id')
        // ->select('locations.*', 'clients.nom AS client_nom', 'clients.prenom AS client_prenom', 'type_logements.nom AS Tlogement_nom', 'logements.mt_logement_par_mois AS logement_loyer', 'locations.date_debut AS location_Ddebut', 'locations.date_fin AS location_dfin', 'locations.avance AS location_avance', 'locations.caution AS location_caution', 'locations.Tcaution AS location_tcaution', 'locations.Tavance AS location_tavance', 'locations.Total AS location_total')
        // ->get();
        return view('Sadmin.PROPRIETAIRE.liste', compact('proprietaires'));
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
            'imageProprietaire' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            "nom" => "required",
            "prenom" => "required",
            "tel1" => "required|unique:proprietaires,tel1",
            "tel2" => "required|unique:proprietaires,tel2",
            "email" => "required|unique:proprietaires,email",
            "sex" => "required",
            "adress" => "required"
        ], [
            'imageProprietaire.required' => 'Veuillez choisir une image pour le champ Image du Propriétaire.',
            'nom.required' => 'Le champ est Vide.',
            'prenom.required' => 'Le champ est Vide.',
            'tel1.required' => 'Le champ est Vide.',
            'tel1.unique' => 'le numero est déja utiliser.',
            'tel2.required' => 'Le champ est Vide.',
            'tel2.unique' => 'le numero est déja utiliser.',
            'email.required' => 'Le champ est Vide.',
            'email.unique' => 'cet email est déja utiliser',
            'sex.required' => 'Le champ est Vide.',
            'adress.required' => 'Le champ est Vide.'
        ]);
        // dd($request);
        if ($request->hasFile("imageProprietaire")) {
            $fileNameWithExt = $request->file("imageProprietaire")->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file("imageProprietaire")->getClientOriginalExtension();
            $fileNameToStore = $fileName . "_" . time() . '.' . $extension;
            $path = $request->file('imageProprietaire')->storeAs('public/imageProprietaire', $fileNameToStore);

            $ajouterProprietaire = new proprietaire();
            $ajouterProprietaire->nom = $request->nom;
            $ajouterProprietaire->prenom = $request->prenom;
            $ajouterProprietaire->sex = $request->sex;
            $ajouterProprietaire->tel1 = $request->tel1;
            $ajouterProprietaire->tel2 = $request->tel2;
            $ajouterProprietaire->email = $request->email;
            $ajouterProprietaire->adress = $request->adress;
            $ajouterProprietaire->photo = $fileNameToStore;
            $ajouterProprietaire->save();
            // $datas = Ville::orderbydesc("id")->get();
            // return View("sadmin.liste", compact("datas"));
            return redirect()->route('sadmin')->with('success', 'La ville vient d\'être enregistrée avec succès.');

            // return redirect()->route('sadmin')->with('success', ' la ville vient d\' être Enregistrer ');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(proprietaire $proprietaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proprietaire $id)
    {
        $proprietaires = proprietaire::find($id);
        return view('Sadmin.PROPRIETAIRE.DetailPro', compact('proprietaires'));
    }
    public function editModification(proprietaire $id)
    {
        $proprietaires = proprietaire::find($id);
        return view('Sadmin.PROPRIETAIRE.modifi', compact('proprietaires'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'imageProprietaire' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            "nom" => "required",
            "prenom" => "required",
            "tel1" => "required|unique:proprietaires,tel1",
            "tel2" => "required|unique:proprietaires,tel2",
            "email" => "required|unique:proprietaires,email",
            "sex" => "required",
            "adress" => "required"

        ]);

        // if ($request->hasFile("imageProprietaire")) {
        //     $fileNameWithExt = $request->file("imageProprietaire")->getClientOriginalName();
        //     $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file("imageProprietaire")->getClientOriginalExtension();
        //     $fileNameToStore = $fileName . "_" . time() . '.' . $extension;
        //     $path = $request->file('imageProprietaire')->storeAs('public/imageProprietaire', $fileNameToStore);

        $proprietaires = proprietaire::find($id);
        $proprietaires->nom = $request->nom;
        $proprietaires->prenom = $request->prenom;
        $proprietaires->tel1 = $request->tel1;
        $proprietaires->tel2 = $request->tel2;
        $proprietaires->email = $request->email;
        $proprietaires->sex = $request->sex;
        $proprietaires->adress = $request->adress;
        if ($request->hasFile('imageProprietaire')) {
            // Supprimez l'ancienne image si elle existe
            if ($proprietaires->photo) {
                Storage::delete('public/imageProprietaire/' . $proprietaires->photo);
            }

            // Enregistrez la nouvelle image téléchargée
            $fileNameWithExt = $request->file("imageProprietaire")->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file("imageProprietaire")->getClientOriginalExtension();
            $fileNameToStore = $fileName . "_" . time() . '.' . $extension;
            $path = $request->file('imageProprietaire')->storeAs('public/imageProprietaire', $fileNameToStore);
            $proprietaires->photo = $fileNameToStore;
        }
        // $proprietaires->photo = $fileNameToStore;
        $proprietaires->update($request->all());
        // return back();
        return redirect()->route('listeProprietaire')->with('success', ' le Quartier vient d\' être Enregistrer ');
        // }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proprietaire = proprietaire::find($id);
        $proprietaire->delete();
        return redirect()->route('listeProprietaire')->with('success', ' le Quartier vient d\' être Enregistrer ');
    }
    public function afficher()
    {
        return view('Sadmin.PROPRIETAIRE.create');
    }
    public function affi()
    {
        return view('Sadmin.PROPRIETAIRE.DetailPro');
    }
}
