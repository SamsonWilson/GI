<?php

namespace App\Http\Controllers;

use App\Models\type_logement;
use App\Models\typeLogement;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class typeLogementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typelogements = type_logement::orderbydesc("id")->get();
        return view("Sadmin.TYPELOGEMENT.liste", compact("typelogements"));
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
        return view("Sadmin.TYPELOGEMENT.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required|",
            "description" => "required",
        ]);
        $ajouterVille = new type_logement();
        $ajouterVille->nom = $request->nom;
        $ajouterVille->description = $request->description;
        $ajouterVille->save();
        // $datas = Ville::orderbydesc("id")->get();
        // return View("sadmin.liste", compact("datas"));
        return redirect()->route('liste_type_logement')->with('success', ' la ville vient d\' être Enregistrer ');
    }

    /**
     * Display the specified resource.
     */

    public function edit(string $id)
    {
        $typeloget = type_logement::find($id);

        return view('Sadmin.TYPELOGEMENT.modifi', compact('typeloget'));
    }
    public function show(type_logement $typeLogement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(type_logement $typeLogement)
    // {
    //     $typeLogement = type_logement::find($typeLogement);

    //     return view('Sadmin.TYPELOGEMENT.modifi', compact('typeLogement'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nom' => 'required|' . Rule::unique('type_logements')->ignore($id),
            'description' => 'required',

        ]);
        $typelog = type_logement::find($id);
        $typelog->nom = $request->nom;
        $typelog->description = $request->description;

        $typelog->update($request->all());
        // return back();
        return redirect()->route('liste_type_logement')->with('success', ' le Quartier vient d\' être Enregistrer ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $typelog = type_logement::find($id);
        $typelog->delete();
        return redirect()->route('liste_type_logement')->with('success', ' le Quartier vient d\' être Enregistrer ');
    }
}
