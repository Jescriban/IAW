<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultados Futbol</title>
        <link rel="stylesheet" type="text/css" href="./style.css" /> 
    </head>
    <body>
        <p>José Escribano Rodríguez</p>
        <?php
        $equipos = ["Real Madrid", "Real Betis", "Real Sociedad",
            "Villarreal", "FC Barcelona", "Sevilla", "Getafe", "Valencia",
            "Cádiz", "Granada", "Osasuna", "Atlético de Madrid", "Celta de Vigo",
            "Eibar", "Huesca", "Elche", "Alavés", "Levante",
            "Athletic Club", "Real Valladolid"];
        echo '--------------APARTADO A) -------------';
        echo "<h5> LOCALES </h5> ";
        //Vamos a barajar los elementos del array $equipos
        shuffle($equipos);
        //Seleccionamos los 10 primeros valores
        $locales = [];
        foreach ($equipos as $contador => $equipo) {
            if ($contador == 10) {
                break;
            }
            $locales[] .= $equipo;
        }
        //Comprobamos que se ha hecho correctamente
        var_dump($locales);
        echo "<h5> VISITANTES </h5> ";
        //Seleccionamos los 10 últimos valores
        $visitantes = [];
        foreach ($equipos as $contador => $equipo) {
            if ($contador > 9) {
                $visitantes[] .= $equipo;
            }
        }
        //Comprobamos que es correcto
        var_dump($visitantes);
        echo '<br><br>--------------APARTADO B) -------------';
        echo "<h5> GOLES LOCALES </h5> ";
        //Declaramos el array
        $golesLocales = [];
        $golesVisitantes = [];
        
        //CORECCION-CORRECCION-CORRECCION-CORRECCION-CORRECCION-CORRECCION
        //CORRECCION - este bucle for es más sencillo 
        for ($contador = 0; $contador < 10; $contador++) {
            $golesLocales[] = rand(0,6);
            $golesVisitantes[] = rand(0,6);
        }
        //Comprobamos que funciona
        var_dump($golesLocales);
        echo "<h5> GOLES VISITANTES </h5> ";
        //Comprobamos que funciona
        var_dump($golesVisitantes);
        echo '<br><br>--------------APARTADO C) -------------';
        //Creamos la tabla
        $tabla = "<table border=1px>" . 
                "<caption>RESULTADOS DE JORNADA</caption>";
        
         //CORECCION-CORRECCION-CORRECCION-CORRECCION-CORRECCION-CORRECCION
        //CORRECCION - este bucle for es más sencillo 
        for ($contador = 0; $contador < 10; $contador++) {
            $tabla .= "<tr>";
            $tabla .= "<td>$locales[$contador]</td>";
            $tabla .= "<td>" . $golesLocales[$contador] . " - " .
                    $golesVisitantes[$contador] . "</td>";
            $tabla .= "<td>$visitantes[$contador]</td></tr>";
        }
        $tabla .= "</table>";
        echo $tabla;
        echo '<br><br>--------------APARTADO D) -------------';
        //Creamos la tabla
        $tablaFormato = '<table id="tablaFormato">';
        foreach ($locales as $contador => $equipo) {
            $tablaFormato .= "<tr>";
            $tablaFormato .= '<td id="locales">' . $locales[$contador] .
                    '<img src="./escudosEquipos/' . $locales[$contador] . ".jpg" . '" >'
                    . '</td>';
            $tablaFormato .= '<td id="goles">' . $golesLocales[$contador] . " - " .
                    $golesVisitantes[$contador] . "</td>";
            $tablaFormato .= '<td id="visitantes">' . '<img src="./escudosEquipos/'
                    . $visitantes[$contador] . ".jpg" . '" >' . $visitantes[$contador] .
                    '</td>';
        }
        $tablaFormato .= "</table>";
        echo $tablaFormato;
        ?>
    </body>
</html>
