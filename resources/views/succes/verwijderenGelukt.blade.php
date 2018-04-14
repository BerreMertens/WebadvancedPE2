<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Succes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/opmaak.css') }}" rel="stylesheet">
</head>
<body>
@include('menu')
<div  style="margin: 15%; margin-left: 35%" class="container">
    <div class="text-center">
        <h1>Locatie werd verwijderd!</h1>
    </div>
    <div class="text-center">
        <a href="/locatie/LocatieLijstGebruiker">Terug naar overzicht</a>
    </div>
</div>
@include('footer')
</body>
</html>