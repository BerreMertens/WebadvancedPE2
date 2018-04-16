<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Antwoord wijzigen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/opmaak.css') }}" rel="stylesheet">
</head>

<body>
@include('menu')
<div class="container">
    <h1 class="title">Antwoord wijzigen</h1>
    <hr>
    <form action="{{ route('antwoord.update', $antwoord->id) }}"  method="post">

        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class=form-group>


                @foreach($locaties as $locatie)
                    @if($antwoord->locatieId==$locatie->id)
                        <h3>{{ $locatie->naam}}</h3>
                    @endif
                    @endforeach


        </div>
        <div class=form-group>
            <label for="Score">Score op 10:</label>
            <div class="col-sm-10 input-group">
                <input type="number" min="1" max="10" class="form-control" id="Score" name="Score" value="{{ $antwoord->score }}" required>
            </div>
        </div>
        <div class=form-group>
            <label for="Commentaar">Commentaar:</label>
            <div class="col-sm-10 input-group">
                <input type="text" maxlength="500" class="form-control" id="Commentaar" name="Commentaar" value="{{ $antwoord->commentaar }}" required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group text-center">
                <button type="submit" class="btn btn-default">Antwoord wijzigen</button>
            </div>
        </div>


    </form>
    <div class="text-center">
        <a href="/locatie/LocatieLijstGebruiker">Terug naar overzicht</a>
    </div>
</div>
@include('footer')
</body>