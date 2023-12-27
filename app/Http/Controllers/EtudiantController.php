<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    public function index()
    {
        $listeEtudiants = Etudiant::all();
        return view('etudiants/liste',["listeEtudiants"=>$listeEtudiants]);
        /*compact permet d'eviter la repetition dans le cas ou la cle est identique a la valeur associe
            Son utilisation est pertinente si on a plusieurs donnees à passer
            Exemple: return view("apprenants/liste",[compact("listeApprenants")];
        */
    }
    public function create()
    {
        return view('etudiants.create');//On peut remplacer les / par des .
    }
    public function store( Request $request)
    {
        //dd($request->all());//dd signifie die and dump
        // dd($request->input('nom'));
        /*Etudiant::create([
            'nom' => $request-> input('nom'),
            'prenom' => $request-> input('prenom'),
            'sexe' => $request-> input('sexe'),
            'matricule' => $request-> input('matricule'),
            'classe' => $request-> input('classe'),
            'date_naissance' => $request-> input('date_naissance'),

        ]);*/
        $request ->validate(
            [
                "nom" => "required",
                "prenom" => "required",
                "sexe" => "required",
                "matricule" => "required",
                "classe" => "required",
                "date_naissance=>required"
            ]
        ); //Privilegier validate car il appelle validator
        Etudiant::create($request->all());

        /* 2 eme methode d'insertion
        $etudiant = new Etudiant();
        $etudiant -> nom =request ->input("nom");ainsi de suite On aura pas besoin de preciser fillable
        */
    }




}
