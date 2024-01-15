<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar serie</title>
    </head>
    <body>
        <form action="{{route("series.update",["series"=>$series->id])}}" method="post">
            @csrf
            {{method_field("PUT")}}
            <label>Titulo</label>
            <input type="text" name="titulo" id="" value="{{$series->titulo}}"><br><br>
            <label >Plataforma</label>
            <input type="text" name="plataforma" id="" value="{{$series->plataforma}}"><br><br>
            <label for="">Temporadas</label>
            <input type="number" name="temporadas" value="{{$series->temporadas}}"><br><br>
            <input type="submit" value="editar">
        </form>
    </body>
</html>