<?php

namespace App\Http\Controllers;

use App\Models\typeUtilisateur;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view("user");
        return view("Sadmin.UTILISATEUR.liste");
    }

    public function affichage()
    {
        return view("auth.register");
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
        //
    }

    /**
     * Display the specified resource.
     */





   
}
