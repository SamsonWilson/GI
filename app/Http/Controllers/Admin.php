<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Admin extends Controller
{

    public function index()
    {

        $datas = Ville::orderbydesc("id")->get();
        return View("sadmin.liste", compact("datas"));
    }
}
