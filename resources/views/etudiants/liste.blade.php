<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="./resources/css/bootstrap.css/bootstrap.min.css"> -->
    <title>Liste etudiants</title>
</head>
<body>
<div>
   <!--<a href="etudiants/new">Ajouter un apprenant</a> -->
    <a href="{{ route('add-new-students') }}" class="btn btn-primary float-end">Ajouter un apprenant</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Sexe</th>
        <th>Matricule</th>
        <th>Classe</th>
        <th>Date de Naissance</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($listeEtudiants as $etudiants)
        <tr>
            <td>{{$etudiants->id}}</td>
            <td>{{$etudiants->nom}}</td>
            <td>{{$etudiants->prenom}}</td>
            <td>{{$etudiants->sexe}}</td>
            <td>{{$etudiants->matricule}}</td>
            <td>{{$etudiants->classe}}</td>
            <td>{{$etudiants->date_naissance}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
