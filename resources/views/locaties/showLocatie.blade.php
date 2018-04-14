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
    <div class="text-center">
        <h1 class="title">Locatie wijzigen</h1>
    </div>
    <hr>

    <form action="{{ route('locatie.update', $locatie->id) }}"  method="post">

        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class=form-group>
            <label for="Naam">Naam:</label>
            <div class="col-sm-10 input-group">
                <input type="text" class="form-control" id="Naam" name="Naam" value="{{ $locatie->naam }}">
            </div>
        </div>
        <div class="form-group">
            <div class="text-center">
                <button type="submit" class="btn btn-default">Locatie wijzigen</button>
            </div>
        </div>
        <div class="form-group">
            <div class="text-center">
                <a href="/locatie">Terug naar overzicht</a>
            </div>
        </div>
    </form>

</div>
@include('footer')
</body>
</html>