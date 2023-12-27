<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UniteEnseignementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/accueil', function () {
     return view('Accueil');
});


Route::get('/students',[EtudiantController::class,'index'])->name('students-list');
Route::get('/students/new',[EtudiantController::class,'create'])->name('add-new-students');
Route::post('/students/store',[EtudiantController::class,'store'])->name('store-students'); //C'est pour differencier l'affichage et la saisie


Route::get('/matieres',[MatiereController::class,'index']);
Route::get('/notes',[NoteController::class,'index']);
Route::get('/uniteEnseignements',[UniteEnseignementController::class,'index']);
