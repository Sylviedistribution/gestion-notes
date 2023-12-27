<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<h1>Formulaire etudiant</h1>

<form action="{{route("store-students")}}" method="post">
    @csrf
    <div class="card-body col-md-8" >
        Nom:<br>
        <input type="text" name="nom"><br>
        Prenom:<br>
        <input type="text" name="prenom"><br>

        <label>Sexe:</label><br>
        <input type="radio" id="masculin" name="sexe" value="M">
        <label for="masculin">M</label>

        <input type="radio" id="feminin" name="sexe" value="F">
        <label for="feminin">F</label><br>

        Matricule:<br>
        <input type="text" name="matricule"><br>
        Classe:<br>
        <input type="text" name="classe"><br>
        Annee de naissance:<br>
        <input type="date" name="date_naissance"><br>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>


</form>
</body>
</html>
