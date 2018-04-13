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

    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
            <h1 class="title">Lijst van alle locaties</h1>
            <hr>
            <ul>
                <div class="table-responsive">
                    <table class="table-hover table-bordered">
                        @foreach ($locaties as $locatie)

                            <tr>
                                <th>{{ $locatie->naam }}</th>
                                <th></th>
                                <th></th>
                                <th><a href="/locatie/{{$locatie->id}}/AntwoordToevoegen">Antwoord toevoegen</a></th>

                            </tr>

                        @endforeach
                    </table>
                </div>
            </ul>
        </div>
        <div class="col-sm-4">

        </div>
    </div>

</div>
@include('footer')
</body>
</html>