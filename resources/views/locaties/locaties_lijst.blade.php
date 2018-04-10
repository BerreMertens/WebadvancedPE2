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
    <a href="/locatie">Nieuwe locatie aanmaken</a>
    <hr>
    <ul>
        <table>
            @foreach ($locaties as $locatie)

                <tr>
                    <th>{{ $locatie->naam }}</th>
                    <th></th>
                    <th></th>
                    <th><a href="/locatie/{{$locatie->id}}">Wijzigen</a></th>
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
</div>

</body>
</html>