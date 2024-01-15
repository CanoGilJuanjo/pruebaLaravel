<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nueva temporada</title>
    </head>
    <body>
        <form action="{{route("temporadas.store")}}" method="post">
            @csrf
            <label>Serie</label>
            <input type="text" name="serie" id=""><br><br>
            <label >Numero temporada</label>
            <input type="text" name="temporada" id=""><br><br>
            <label for="">Nombre</label>
            <input type="number" name="nombreTemporada"><br><br>
            <label >Capitulos</label>
            <input type="number" name="capitulos" id=""><br>
            <input type="submit" value="crear">
        </form>
    </body>
</html>