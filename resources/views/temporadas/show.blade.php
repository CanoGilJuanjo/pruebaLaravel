<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ver temporada</title>
    </head>
    <body>
        <p>Serie: {{$temporadas -> serie}}</p>
        <p>Numero temporada: {{$temporadas -> temporada }}</p>
        <p>Nombre temporada: {{$temporadas -> nombreTemporada}}</p>
        <p>Capitulos: {{$temporadas -> capitulos}}</p>
    </body>
</html>