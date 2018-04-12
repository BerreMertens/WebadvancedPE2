<div class="rechtsboven">

    @if(Auth::check())
        <a class="menu" href="{{url('logout')}}">Log Out</a>
        <a class="menu" href="/locatie">{{Auth::user()->name}}</a>
        <a class="menu" href="locatie/LocatieLijstGebruiker">Locaties</a>
        <a class="menu" href="/home">Home</a>


    @else
        <a class="menu" href="/Login">Login</a>
        <a class="menu" href="locatie/LocatieLijstGebruiker">Locaties</a>
        <a class="menu" href="/home">Home</a>
    @endif

</div>