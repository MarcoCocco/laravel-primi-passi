<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel: Primi passi</title>
</head>
<body>
    <h1>Hello World</h1>
<header>
    <nav class='nav'>
<ul>
    @foreach ($links as $link)
    <li><a href="{{ route($link) }}">{{ $link }}</a></li>
    @endforeach
</ul>
    </nav>
</header>
    <hr>
    <ul>
        @foreach ($listaSpesa as $elementoSpesa)
        <li>{{ $elementoSpesa }}</li>
        @endforeach
    </ul>


</body>
</html>