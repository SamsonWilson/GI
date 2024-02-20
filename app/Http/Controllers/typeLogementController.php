<?php

namespace App\Http\Controllers;

use App\Models\typeLogement;
use App\Models\Ville;
use Illuminate\Http\Request;

class typeLogementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Ville::orderbydesc("id")->get();
        // return View("sadmin.type", compact("datas"));
        return view("Sadmin.TYPELOGEMENT.liste", compact("datas"));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(typeLogement $typeLogement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(typeLogement $typeLogement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, typeLogement $typeLogement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(typeLogement $typeLogement)
    {
    }
}
