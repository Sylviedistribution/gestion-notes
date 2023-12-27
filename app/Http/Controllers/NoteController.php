<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller
{
    function index(){
        $listeNotes =Note::all();
        return view("/notes/liste",compact("listeNotes"));
    }

}
