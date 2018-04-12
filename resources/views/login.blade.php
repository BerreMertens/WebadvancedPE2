<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Look at me Login</title>


</head>
<body>
<header>

    <h1>Log in</h1>

</header>
@include('menu')
<div class="content">

    <div class="row">

        <div class="column" id="columnLeft">

        </div>
        <div class="column">
            <form class="form-horizontal" action="/Login" method="POST">

                {{ csrf_field() }}
                <div class=form-group>
                    <label for="email" class="col-sm-2 control-label">email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="dikkezeikmuil@gmail.com" required>
                    </div>
                    <label for="password" class="col-sm-2 control-label">password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="**************" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn ">inloggen</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="">
                        <a href="/home">Terug naar home</a>
                    </div>
                </div>

            </form>
        </div>
        <div class="column" id="columnRight">

        </div>

    </div>
</div>
@include('footer')
</body>