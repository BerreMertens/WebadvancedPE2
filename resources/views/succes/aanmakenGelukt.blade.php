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
    <h1>Locatie werd aangemaakt!</h1>
    <a href="/locatie">Terug naar overzicht</a>
</div>
@include('footer')
</body>
</html>