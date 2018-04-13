<header>
<nav class="navbar navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/home">onbekwaam</a>
        </div>
        <ul class="nav navbar-nav ">

            @if(Auth::check())
                <li ><a href="/home">Home</a></li>
                <li><a  href="/locatie/LocatieLijstGebruiker">Locaties</a></li>

                <li><a href="/locatie">{{Auth::user()->name}}</a></li>
                <li><a href="{{url('logout')}}">Log Out</a></li>
            @else
                <li ><a href="/home">Home</a></li>
                <li><a href="/locatie/LocatieLijstGebruiker">Locaties</a></li>
                <li ><a href="/home">mijn antwoorden</a></li>
                <li><a href="/Login">Login</a></li>
            @endif
        </ul>
    </div>
</nav>
</header>