<?php

namespace App\Http\Controllers;

use App\Models\quartiers;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Sadminquartier extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quartiers = quartiers::orderbydesc("id")->get();
        return view("Sadmin.QUARTIER.liste", compact("quartiers"));
        // $datas = Ville::orderbydesc("id")->get();
        // return view("admin.quatier.createQuartier", compact("datas"));
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
            "imagequartier" => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            "nom" => "required|unique:villes,nom",
            "description" => "required",
        ]);
        if ($request->hasFile("imagequartier")) {
            $fileNameWithExt = $request->file("imagequartier")->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file("imagequartier")->getClientOriginalExtension();
            $fileNameToStore = $fileName . "_" . time() . '.' . $extension;
            $path = $request->file('imagequartier')->storeAs('public/imagequartier', $fileNameToStore);

            $ajouterVille = new quartiers;
            $ajouterVille->nom = $request->nom;
            $ajouterVille->description = $request->description;
            $ajouterVille->imagequartier = $fileNameToStore;
            $ajouterVille->ville_id = $request->ville_id;
            $ajouterVille->save();
            // dd($ajouterVille);
            // $datas = quartiers::orderbydesc("id")->get();
            // return View("admin.affichage", compact("datas"));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return view("Sadmin.QUARTIER.create");
    }
    public function afficher()
    {
        $datas = Ville::orderbydesc("id")->get();
        return view("Sadmin.QUARTIER.create", compact("datas"));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $quartier = quartiers::find($id);

        return view('Sadmin.QUARTIER.modifi', compact('quartier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nom' => 'required|' . Rule::unique('villes')->ignore($id),
            'description' => 'required',

        ]);
        $quartier = quartiers::find($id);
        $quartier->nom = $request->nom;
        $quartier->description = $request->description;

        $quartier->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $quartier = quartiers::find($id);
        $quartier->delete();
    }
}