<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Temporadas</title>
        <style>
            table{
                text-align: center;
                font-size: 20px;
            }
            th{
                padding: 5px;
            }
            td{
                border: 1px solid black;
                border-radius: 10px;
                padding: 15px;
                transition: all 0.3s;
            }
            td:hover{
                background-color: grey;
                color: white;
            }
            
            input[type="submit"]{
                font-size: 20px;
                padding: 5px;
                margin: 0px;
            }
            input[value="🧿"]:hover{
                background-color: aqua;
            }
            input[value="🗑️"]:hover{
                background-color: red;
            }
            input[value="📝"]:hover{
                background-color: orange;
            }
        </style>
    </head>
    <body>
        <h1>{{$mensaje}}</h1>
        <table>
            <thead>
                <tr>
                    <th>Serie</th>
                    <th>Numero temporada</th>
                    <th>Nombre</th>
                    <th>Capitulos</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($temporadas as $temporada)
                    <tr>
                        <td>{{$temporada->serie->titulo}}</td>
                        <td>{{$temporada->temporada}}</td>
                        <td>{{$temporada->nombreTemporada}}</td>
                        <td>{{$temporada->capitulos}}</td>
                        <td>
                            <form action="{{route("temporadas.show",["temporada"=> $temporada->id])}}" method="get">
                                <input type="submit" value="🧿">
                            </form>
                        </td>
                        <td>
                            <form action="{{route("temporadas.edit",["temporada"=> $temporada->id])}}" method= "get">
                                <input type="submit" value="📝">
                            </form>
                        </td>
                        <td>
                            <form action="{{route("temporadas.destroy",["temporada"=> $temporada->id])}}" method="post">
                                @csrf
                                {{method_field("DELETE")}}
                                <input type="submit" value="🗑️">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>