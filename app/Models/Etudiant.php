<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'sexe', 'matricule','classe', 'date_naissance'];//On cite toutes les colonnes
    //protected $guarded =[]; inserer toutes les valeurs sauf celles du tableau

}
