<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WebadvancedPE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/opmaak.css') }}" rel="stylesheet">
</head>

<body>
@include('menu')



<div class="container">
    <h1 class="title text-center">Antwoord toevoegen</h1>
    <hr>
    <form class="form-horizontal" action="/antwoord/create/{{ $locatie->id }}" method="POST">

        {{ csrf_field() }}

        <div class=form-group>
                <h3>{{ $locatie->naam }}</h3>
        </div>
        <div class=form-group>
            <label for="Score">Score op 10:</label>
            <div class="col-sm-10 input-group">
                <input type="number" min="1" max="10" class="form-control" id="Score" name="Score" required>
            </div>
        </div>
        <div class=form-group>
            <label for="Commentaar">Commentaar:</label>
            <div class="col-sm-10 input-group">
                <input type="text" maxlength="500" class="form-control" id="Commentaar" name="Commentaar" required>
            </div>
        </div>
        <div class="form-group text-center">
                <button type="submit" class="btn btn-default">Antwoord toevoegen</>
        </div>


    </form>
    <div class="text-center">
        <a href="/locatie/LocatieLijstGebruiker">Terug naar overzicht</a>
    </div>

</div>
@include('footer')
</body>