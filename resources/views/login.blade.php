<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Look at me Login</title>
</head>
<body>

<form class="form-horizontal" action="/Login" method="POST">

    {{ csrf_field() }}

    <div class=form-group>
        <label for="email" class="col-sm-2 control-label">email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" placeholder="dikkezeikmuil@gmail.com" required>
        </div>
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="**************" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">inloggen</button>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a href="/home">Terug naar home</a>
        </div>
    </div>

</form>
</body>