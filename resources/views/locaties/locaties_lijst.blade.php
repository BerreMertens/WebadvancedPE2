<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="title">Lijst van alle locaties</h1>
    <hr>
    <ul>
        @foreach ($locaties as $locatie)

            <li><a href="/locatie/{{$locatie->id}}"> {{ $locatie->naam }} </a></li>

        @endforeach

    </ul>
</div>

</body>
</html>