<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1 class="title">Locatie wijzigen</h1>
    <hr>
    <form class="form-horizontal" action="/locatie/update" method="PUT">

        {{ csrf_field() }}

        <div class=form-group>
            <label for="Naam" class="col-sm-2 control-label">Naam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Naam" name="Naam" placeholder="{{ $locatie->naam }}">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Locatie wijzigen</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="/locatie">Terug naar overzicht</a>
            </div>
        </div>
</div>

</body>
</html>