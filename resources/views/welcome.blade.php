<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film</title>
</head>
<body>
    <div>
    <!--LISTA DEI FILM-->

    <h1>Lista dei Film:</h1>

    @foreach ($movies as $movie)

    <h1>Titolo: {{$movie['title']}}</h1>
    <h2>Data di Uscita: {{$movie['date']}}</h2>
    <h4>Voto :{{$movie['vote']}}</h4>
    <h4>Nazionalità: {{$movie['nationality']}}</h4>
    @endforeach
    </div>
</body>
</html>
