<!DOCTYPE html>

<html>

<head>
    <style>

        body{
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .content{
            display: flex;
            justify-content: center;
            position: relative;
            right: 10px;
            top: 25%;
        }
        header{
            justify-content: center;
            display: flex;
            position: relative;
            top:10%;
        }
        .rechtsboven {
            position: absolute;
            right: 10px;
            top: 18px;

        }
        .rechtsboven > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
                       }
        .column {
            float:left;
            margin-left:5%;
            margin-right:5%;
            width: auto;
        }

        img{
            width:33%;
            height:40%;
        }
        .row:after {

            display: table;
            clear: both;

        }
        </style>
    <title>WebadvancedPE?</title>

</head>

<body>
<header>

    <h1>Team onbekwaam</h1>

</header>
<div class="rechtsboven">
    <a href="/home">Home</a>
    <a href="/locatie">Locaties</a>
    <a href="/Login">Login</a>

</div>

<div class="content">

    <div class="row">
        <div class="column">
            <h2>Yoran Nelissen</h2>
        <img src="{{ url('images/pic1.jpg') }}">
        </div>
        <div class="column">
            <h2>Berre Mertens</h2>
            <img src="{{ url('images/pic5.jpg') }}">
        </div>
        <div class="row">
            <div class="column">
                <h2>Driss Moris</h2>
                <img src="{{ url('images/pic3.jpg') }}">
            </div>
            <div class="column">
                <h2>Ben Agten</h2>
                <img src="{{ url('images/pic6.jpg') }}">
            </div>

        </div>

    </div>



</div>


</body>

</html>