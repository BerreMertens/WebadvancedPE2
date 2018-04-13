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
    <h1 class="title">Antwoord toevoegen</h1>
    <hr>
    <form action="{{ route('antwoord.update', $antwoord->id) }}"  method="post">

        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class=form-group>
            <div class="col-sm-10">
                <h3>{{ $antwoord->naam }}</h3>
            </div>
        </div>
        <div class=form-group>
            <label for="Score" class="col-sm-2 control-label">Score op 10</label>
            <div class="col-sm-10">
                <input type="number" min="1" max="10" class="form-control" id="Score" name="Score" value="{{ $antwoord->score }}" required>
            </div>
        </div>
        <div class=form-group>
            <label for="Commentaar" class="col-sm-2 control-label">Commentaar</label>
            <div class="col-sm-10">
                <input type="text" maxlength="500" class="form-control" id="Commentaar" name="Commentaar" value="{{ $antwoord->commentaar }}" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Antwoord wijzigen</>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="/antwoord/lijstAntwoorden">Terug naar overzicht</a>
            </div>
        </div>

    </form>
</div>
@include('footer')
</body>