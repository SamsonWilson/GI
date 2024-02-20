<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Sadmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $datas = Ville::orderbydesc("id")->get();
        return View("sadmin.liste", compact("datas"));
        // $datas = Ville::orderbydesc("id")->get();
        // return View("admin.affichage", compact("datas"));
        //
        // dd($datas);
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
            'imageville' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            "nom" => "required|unique:villes,nom",
            "description" => "required",
        ]);
        if ($request->hasFile("imageville")) {
            $fileNameWithExt = $request->file("imageville")->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file("imageville")->getClientOriginalExtension();
            $fileNameToStore = $fileName . "_" . time() . '.' . $extension;
            $path = $request->file('imageville')->storeAs('public/imageville', $fileNameToStore);

            $ajouterVille = new Ville();
            $ajouterVille->nom = $request->nom;
            $ajouterVille->description = $request->description;
            $ajouterVille->imageville = $fileNameToStore;
            $ajouterVille->save();
            $datas = Ville::orderbydesc("id")->get();
            return View("sadmin.liste", compact("datas"));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    public function afficher()
    {

        return View("sadmin.create");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $villes = Ville::find($id);

        return view('sadmin.modif', compact('villes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nom' => 'required|' . Rule::unique('villes')->ignore($id),
            'description' => 'required',

        ]);
        $villes = Ville::find($id);
        $villes->nom = $request->nom;
        $villes->description = $request->description;
        $villes->update($request->all());
        $datas = Ville::orderbydesc("id")->get();
        return View("sadmin.liste", compact("datas"));
        // return back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $ville)
    {
        $villeModel = Ville::find($ville);
        $villeModel->delete();

        // $datas = Ville::orderbydesc("id")->get();
        // return View("sadmin.liste", compact("datas"));
        return back();
    }
}
