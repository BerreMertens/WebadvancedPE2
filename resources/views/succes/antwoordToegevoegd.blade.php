<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Succes</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
@include('menu')
<div  style="margin: 15%; margin-left: 35%" class="container">
    <h1>Antwoord werd toegevoegd!</h1>
    <a href="/locatie/LocatieLijstGebruiker">Terug naar overzicht</a>
</div>
@include('footer')
</body>
</html>