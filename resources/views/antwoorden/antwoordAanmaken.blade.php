<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Antwoord toevoegen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/opmaak.css') }}" rel="stylesheet">
</head>

<body>
@include('menu')



<div class="container">
    <h1 class="title">Antwoord toevoegen</h1>
    <hr>
    <form class="form-horizontal" action="/antwoord/create/{{ $locatie->id }}" method="POST">

        {{ csrf_field() }}

        <div class=form-group>
            <div class="col-sm-10">
                <h3>{{ $locatie->naam }}</h3>
            </div>
        </div>
        <div class=form-group>
            <label for="Score" class="col-sm-2 control-label">Score op 10</label>
            <div class="col-sm-10">
                <input type="number" min="1" max="10" class="form-control" id="Score" name="Score" required>
            </div>
        </div>
        <div class=form-group>
            <label for="Commentaar" class="col-sm-2 control-label">Commentaar</label>
            <div class="col-sm-10">
                <input type="text" maxlength="500" class="form-control" id="Commentaar" name="Commentaar" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Antwoord toevoegen</
                >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="/locatie/LocatieLijstGebruiker">Terug naar overzicht</a>
            </div>
        </div>

    </form>

</div>
@include('footer')
</body>