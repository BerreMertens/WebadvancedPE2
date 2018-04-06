<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>





<ul>
    @foreach ($locaties as $locatie)

        <li><a href="/locatie/{{$locatie->id}}"> {{ $locatie->naam }} </a></li>

    @endforeach

</ul>

</body>
</html>