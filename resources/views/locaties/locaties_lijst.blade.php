<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/opmaak.css') }}" rel="stylesheet">
</head>
<body>
@include('menu')
<div class="container">
    @if(Auth::check())
    <h1 class="title">Lijst van alle locaties</h1>
    <a href="/locatie/NieuweLocatieAanmaken">Nieuwe locatie aanmaken</a>
    <hr>
    <ul>
        <table>
            @foreach ($locaties as $locatie)

                <tr>
                    <th>{{ $locatie->naam }}</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><a href="/locatie/{{$locatie->id}}">Wijzigen</a></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><a href="/locatie/locatieDetails/{{$locatie->id}}">Antwoorden Bekijken</a></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>
                        <form action="{{ route('locatie.delete', $locatie->id) }}"  method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit">Verwijderen</button>
                        </form>
                    </th>
                </tr>

            @endforeach
        </table>
    </ul>
    @else


        <div class="text-center">
            <h1 class="">access denied!</h1>
            <video controls src="/videos/stop3.mp4"></video>


       

    @endif
</div>

@include('footer')
</body>
</html>