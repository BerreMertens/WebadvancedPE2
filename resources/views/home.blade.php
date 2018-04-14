<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/opmaak.css') }}" rel="stylesheet">

    <title>WebadvancedPE</title>

</head>

<body>

    @include('menu')

   
    <div class="container">

        <h1 class="text-center">Team onbekwaam</h1>
        <div class="panel-body text-left">


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


<div class="container">

    <div class="row ">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
            <h2 >Yoran Nelissen</h2>
            <img  class="img-rounded img-responsive" src="{{ url('images/pic1.jpg') }}">
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
            <h2 >Berre Mertens</h2>
            <img class="img-rounded img-responsive" src="{{ url('images/pic5.jpg') }}">
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h2 >Dries Moris</h2>
            <img class="img-rounded img-responsive" src="{{ url('images/pic3.jpg') }}">
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h2 >Ben Agten</h2>
            <img class="img-rounded img-responsive" src="{{ url('images/pic6.jpg') }}">
        </div>

    </div>


</div>



@include('footer')

</body>
</html>