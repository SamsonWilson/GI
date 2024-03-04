<?php

namespace App\Http\Controllers;

use App\Models\typeUtilisateur;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderbydesc("id")->get();
        return view("Sadmin.UTILISATEUR.liste", compact("users"));
    }

    // public function affichage()
    // {
    //     // return view("auth.register");
    //     return view('Sadmin.UTILISATEUR.createUtilisateur');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function affichage()
    {
        $roles = Role::orderBy("id", "Desc")->get();
        return view('Sadmin.UTILISATEUR.createUtilisateur', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'photo' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            "name" => "required",
            "prenom" => "required",
            "sexe" => "required",
            "datenais" => "required",
            "adress" => "required",
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'string', 'min:8'],
            'tel' => 'required|numeric|unique:users,tel',

        ]);
        // dd($request);
        if ($request->hasFile("photo")) {
            $fileNameWithExt = $request->file("photo")->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file("photo")->getClientOriginalExtension();
            $fileNameToStore = $fileName . "_" . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/imageusers', $fileNameToStore);

            $ajouterUser = new User();

            $ajouterUser->name = $request->name;
            $ajouterUser->prenom = $request->prenom;
            $ajouterUser->tel = $request->tel;
            $ajouterUser->password = hash::make($request->password);
            $ajouterUser->sexe = $request->sexe;
            $ajouterUser->email = $request->email;
            $ajouterUser->adress = $request->adress;
            $ajouterUser->datenais = $request->datenais;
            $ajouterUser->photo = $fileNameToStore;
            $ajouterUser->save();
            return redirect()->route('liste_utilisateur')->with('success', ' le Quartier vient d\' être Enregistrer ');

            // return back()->with("success", " inscription realiser avec succè!");
        } else {
            echo 'pas de connexion';
        }
    }
}
