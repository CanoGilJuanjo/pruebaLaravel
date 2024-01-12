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
                border: 1px solid black;
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
        </style>
    </head>
    <body>
        <h1>{{$mensaje}}</h1>
        <form action="">
            <select name="filtro" id="">
                <option value="" selected>Seleccione una opcion</option>
                <option value="Suite">Suite</option>
                <option value="La casa de papel">La casa de papel</option>
            </select>
            <input type="submit" value="filtrar">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["filtro"])){
                $filtro = $_GET["filtro"];
                echo $filtro;
            }
        ?>
        <table>
            <thead>
                <tr>
                    <th>Serie</th>
                    <th>Numero temporada</th>
                    <th>Nombre</th>
                    <th>Capitulos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($temporadas as $temporada)
                    <tr>
                        @if(@isset($filtro) && $filtro == $temporada->serie)
                            <td>{{$temporada->serie}}</td>
                            <td>{{$temporada->temporada}}</td>
                            <td>{{$temporada->nombreTemporada}}</td>
                            <td>{{$temporada->capitulos}}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>