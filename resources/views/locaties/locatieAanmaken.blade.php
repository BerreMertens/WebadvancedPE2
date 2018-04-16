<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nieuwe locatie aanmaken</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/opmaak.css') }}" rel="stylesheet">
</head>
@include('menu')
<body>
<div class="container">
    <h1 class="title text-center">Nieuwe locatie aanmaken</h1>
    <hr>
    <form class="form-horizontal" action="/locatie/create" method="POST">

        {{ csrf_field() }}

        <div class=form-group>
            <label for="Naam" class="control-label">Naam:</label>

                <input type="text" class="form-control" id="Naam" name="Naam" placeholder="Naam" required>

        </div>
        <div class="form-group">
            <div class="text-center">
                <button type="submit" class="btn btn-default">Locatie aanmaken</button>
            </div>
        </div>
        <div class="form-group">
            <div class="text-center">
                <a href="/locatie">Terug naar overzicht</a>
            </div>
        </div>




    </form>
</div>
@include('footer')
</body>