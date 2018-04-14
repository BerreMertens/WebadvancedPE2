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
<div class="container text-center">
        <h1 class="title">Lijst van al mijn antwoorden</h1>

    <hr>
    <ul>
        <table class=" table table-hover">

            @foreach ($antwoorden as $antwoord)
                <tr>
                    <th><h3>Locatie</h3></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><h3>Score</h3></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><h3>Commentaar</h3></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    @foreach($locaties as $locatie)
                    @if($antwoord->locatieId == $locatie->id && $antwoord->token == $token)

                        <th>{{$locatie->naam}}</th>

                        @endif
                    @endforeach
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                    <th>{{ $antwoord->score }}</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>{{ $antwoord->commentaar }}</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><a href="/antwoord/{{$antwoord->id}}">Wijzigen</a></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>
                        <form action="{{ route('antwoord.delete', $antwoord->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class=" btn btn-default">Verwijderen</button>
                        </form>
                    </th>
                </tr>

            @endforeach
        </table>
    </ul>

</div>

@include('footer')
</body>
</html>