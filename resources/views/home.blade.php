<!DOCTYPE html>

<html>

<head>
    <style>

        body {

            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            font-size:18px;
            background-image: url("/images/backgroundImage4.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .content {
            justify-content: center;
        }

        header {
            justify-content: center;
            display: flex;

            margin-top:5%;
            margin-bottom: 5%;
        }

        .rechtsboven {
            overflow: hidden;
            background-color:#EDEEE8 ;
            position: fixed; /* Set the navbar to fixed position */
            top: 0; /* Position the navbar at the top of the page */
            width: 100%; /* Full width */
            border-bottom-color:#636b6f ;
            border-bottom: solid;
        }

        .rechtsboven > a {
            color: #636b6f;

            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;

            float: right;
            display: block;

            text-align: center;
            padding: 14px 16px;


        }
        .rechtsboven > a:hover{
            background-color: #636b6f;
            color:white;
        }

        .column {
            float:left;
            width:25%;

        }

        img {
            width:80%;
            height: auto;
            margin-left:10%;
            margin-right:10%;
        }

        .row {
            display: table;

        }
        .kort{
            margin-left:33%;
            margin-right:33%;
        }
        .lang{
            margin-left:27%;
            margin-right:27%;
        }
        .tekst{

            margin-right:33%;
            margin-left:33%;
        }
        .footer {

            clear:both;
            bottom: 0;
            width: 100%;
            height:60px;
            background-color:#636b6f;
            color: whitesmoke;
            text-align: center;
        }


    </style>
    <title>WebadvancedPE</title>

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
            <h2 class="lang">Yoran Nelissen</h2>
            <img src="{{ url('images/pic1.jpg') }}">
        </div>
        <div class="column">
            <h2 class="lang">Berre Mertens</h2>
            <img src="{{ url('images/pic5.jpg') }}">
        </div>

        <div class="column">
            <h2 class="kort">Driss Moris</h2>
            <img src="{{ url('images/pic3.jpg') }}">
        </div>
        <div class="column">
            <h2 class="kort">Ben Agten</h2>
            <img src="{{ url('images/pic6.jpg') }}">
        </div>
    </div>


</div>

<div class="content">
<div class="tekst">


    <p>Maak in het gekozen MVC Framework een toepassing die het toelaat om per locatie een
        tevredenheidsbevraging uit te voeren. Zorg er ook voor dat de toepassing responsive is via
        een css framework.



       </p>
    <p> A1 Voorzie een welkomstscherm met voorstelling van de opdracht en de teamleden.<br>
        A2 Zorg voor een login procedure voor de administrator.<br>
         B1 De administrator krijgt een overzicht van alle locaties en kan een nieuwe locatie
        aanmaken en een bestaande locatie wijzigen en verwijderen.<br>
        B2 De administrator krijgt een overzicht van de locaties en kan per gekozen locatie alle
        antwoorden verwijderen.<br>
        B4 De administrator krijgt een overzicht van alle antwoorden en kan een antwoord
        selecteren en verwijderen.<br>
        C1 Een (niet ingelogde) gebruiker krijgt een overzicht van alle locaties. Hij kan voor een
        geselecteerde locatie een antwoord geven en krijgt een uniek token na het invullen van zijn
        antwoord.<br>
        C2 Een (niet ingelogde) gebruiker kan zijn antwoord wijzigen en verwijderen adhv het token.</p>

<p> Elke groep verplicht A1 en A2. Per student 1 story uit B of C, in de groep moet altijd
    minstens 1 story uit B en 1 story uit C uitgewerkt worden.
    De verdediging vindt plaats ten laatste tijdens de les van de week die begint op maandag
    16/4.</p>
</div>
</div>

<div class="footer">
    <p>All rights reserved Copyright © 2018 by Barry enterprise</p>
</div>



</body>
<footer>

</footer>
</html>