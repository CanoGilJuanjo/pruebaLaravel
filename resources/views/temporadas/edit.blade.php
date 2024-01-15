<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar serie</title>
    </head>
    <body>
        <form action="{{route("temporadas.update",["temporada"=>$temporadas->id])}}" method="post">
            @csrf
            {{method_field("PUT")}}
            <label>Serie</label>
            <input type="text" name="serie" id="" value="{{$temporadas -> serie}}"><br><br>
            <label >Numero temporada</label>
            <input type="text" name="temporada" id="" value="{{$temporadas -> temporada}}"><br><br>
            <label for="">Nombre</label>
            <input type="text" name="nombreTemporada" value="{{$temporadas -> nombreTemporada}}"><br><br>
            <label >Capitulos</label>
            <input type="number" name="capitulos" id="" value="{{$temporadas -> capitulos}}"><br>
            <input type="submit" value="editar">
        </form>
    </body>
</html>