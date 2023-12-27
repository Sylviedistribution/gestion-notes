<?php

namespace App\Http\Controllers;
use App\Models\UniteEnseignement;
use Illuminate\Http\Request;


class UniteEnseignementController extends Controller
{
    function index(){
        $listeUnitesEnseignements= UniteEnseignement::all();
        return view("/uniteEnseignements/liste",compact("listeUnitesEnseignements"));
    }
}
