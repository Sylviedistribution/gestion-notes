<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Professeur</th>
                <th>Coefficient</th>
                <th>Unité d'enseignement</th>

            </tr>
        </thead>
        <tbody>
@foreach ($listeMatieres as $matieres)
    <tr>
        <td>{{$matieres->id}}</td>
        <td>{{$matieres->nom}}</td>
        <td>{{$matieres->professeur}}</td>
        <td>{{$matieres->coefficient}}</td>
        <td>{{$matieres->unite_enseignement_id}}</td>

    </tr>
    @endforeach
    </tbody>
    </table>
    </body>
    </html>
