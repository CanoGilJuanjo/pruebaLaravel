<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main page</title>
        <style>
            table{
                text-align: center;
                border-radius: 10px;
            }
            td{
                border: 1px solid black;
                padding: 5px;
                transition: all 0.3s;
                border-radius: 5px;
            }
            td:hover{
                background-color: black;
                color: white;
            }
            thead:hover{
                color: white;
                background-color: grey;
            }
            thead:hover th{
                border: 1px solid grey;
            }
        </style>
    </head>
    <body>
        <h1>Pagina principal de las series</h1>
        <p>{{$mensaje}}</p>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Plataforma</th>
                    <th>Temporadas</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($series as $serie)
                    <tr>
                        <td>{{$serie->titulo}}</td>
                        <td>{{$serie->plataforma}}</td>
                        <td>{{$serie->temporadas}}</td>
                    </tr>
                @endforeach

                <?php
                    /*
                        foreach ($series as $serie) {
                            echo "<tr>";
                            for($i = 0; $i<count($serie);$i++){
                                echo "<td>".$serie[$i]."</td>";
                            }
                            echo "</tr>";
                        }
                    */
                ?>
            </tbody>
        </table>
    </body>
</html>