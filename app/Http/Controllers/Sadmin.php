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
        $datas = Ville::all();
        dd($datas);
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
        $ajouterVille = new Ville();
        $ajouterVille->nom = $request->nom;
        $ajouterVille->description = $request->description;
        $ajouterVille->save();
        return back();
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
    public function edit($id)
    {
        $villes = Ville::find($id);

         return view ('admin.modification',compact('villes'));
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
         return back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $ville)
    {
        $villeModel = Ville::find($ville);

        $villeModel->delete();

        return back();
    }
}