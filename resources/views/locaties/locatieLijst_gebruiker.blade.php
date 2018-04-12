<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
@include('menu')
<div class="container">
    <h1 class="title">Lijst van alle locaties</h1>
    <hr>
    <ul>
        <table>
            @foreach ($locaties as $locatie)

                <tr>
                    <th>{{ $locatie->naam }}</th>
                    <th></th>
                    <th></th>
                    <th><a href="/locatie/{{$locatie->id}}/AntwoordToevoegen">Antwoord toevoegen</a></th>

                </tr>

            @endforeach
        </table>
    </ul>
</div>
@include('footer')
</body>
</html>