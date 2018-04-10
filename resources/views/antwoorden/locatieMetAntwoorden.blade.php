<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="title">Details {{ $locatie->naam }}</h1>
    <hr>
    <table>
        <tr>
            <th><h5>Score</h5></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><h5>Commentaar</h5></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($antwoorden as $antwoord)
            <tr>
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
                <th>
                    <form action="{{ route('antwoord.delete', $antwoord->id) }}"  method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit">Verwijderen</button>
                    </form>
                </th>
            </tr>

        @endforeach
        <tr>
            <a href="/locatie">Terug naar overzicht</a>
        </tr>
    </table>

</div>

</body>
</html>