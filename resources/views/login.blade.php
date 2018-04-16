<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/opmaak.css') }}" rel="stylesheet">
    <title>WebadvancedPE</title>


</head>
<body>





@include('menu')

    <h1 class="text-center">Log in</h1>

<div class="container">

    <form  action="/Login" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>

            </div>
        </div>
            <div class="text-center">
                <button type="submit" class="btn btn-default">Login</button>
                <br>
                <br>
            </div>
        @if ($error = $errors->first('password'))
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endif
    </form>
    <div class="text-center">
        <a href="/home">Terug naar home</a>
    </div>
</div>
@include('footer')
</body>