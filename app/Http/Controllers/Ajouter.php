<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;



class ajouter extends Controller
{
    public function index()
    {
        return View("admin.ajouter");
    }

    public function ajouterV(Request $request)
    {
        $ajouterVille = new Ville();
        $ajouterVille->nom= $request->input->nom;
        $ajouterVille->description = $request->description;
        $ajouterVille->save();
        // return View("admin.ajouter");
    }
}