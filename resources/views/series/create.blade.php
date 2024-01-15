<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nueva serie</title>
    </head>
    <body>
        <form action="{{route("series.store")}}" method="post">
            @csrf
            <label>Titulo</label>
            <input type="text" name="titulo" id=""><br><br>
            <label >Plataforma</label>
            <input type="text" name="plataforma" id=""><br><br>
            <label for="">Temporadas</label>
            <input type="number" name="temporadas"><br><br>
            <input type="submit" value="crear">
        </form>
    </body>
</html>