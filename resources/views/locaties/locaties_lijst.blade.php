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

    <h1 class="title text-center">Lijst van alle locaties</h1>
    <div class="text-center">
            <a href="/locatie/NieuweLocatieAanmaken">Nieuwe locatie aanmaken</a>
    </div>
    <hr>
    <ul>
        <div class="text-center">
        <table class="table table-hover">
            @foreach ($locaties as $locatie)

                <tr>
                    <th>{{ $locatie->naam }}</th>

                    <th><a href="/locatie/{{$locatie->id}}">Wijzigen</a></th>

                    <th><a href="/locatie/locatieDetails/{{$locatie->id}}">Antwoorden Bekijken</a></th>

                    <th>
                        <form action="{{ route('locatie.delete', $locatie->id) }}"  method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-default">Verwijderen</button>
                        </form>
                    </th>


                </tr>



            @endforeach
        </table>
        </div>
    </ul>
        

    @else


        <div class="text-center">
            <h1 class="">access denied!</h1>
            <video class="glyphicon-hd-video" src="/videos/stop3.mp4" loop autoplay></video>


       

    @endif
</div>

@include('footer')
</body>
</html>