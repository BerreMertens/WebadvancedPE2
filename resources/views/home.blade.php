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
        content{
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

        .column {
            float: left;
            width: 25%;
        }


        .row:after {
            content: "";
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

    <a href="">Home</a>
    <a href="">Login</a>


</div>

<content>

    <div class="row">
        <div class="column">
            <h2>Yoran Nelissen</h2>
        <img src="../../pictures/pic1.jpg">
        </div>
        <div class="column">
            <h2>Berre Mertens</h2>
            <img src="../../pictures/pic2.jpg">
        </div>
        <div class="column">
            <h2>Driss Moris</h2>
            <img src="../../pictures/pic3.jpg">
        </div>
        <div class="column">
            <h2>Ben Agten</h2>
            <img src="../../pictures/pic4.jpg">
        </div>
    </div>
</content>


</body>

</html>