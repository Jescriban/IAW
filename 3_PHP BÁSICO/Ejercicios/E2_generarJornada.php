<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./E2_GenerarJornada.css" media="all"/>
        <title></title>
    </head>
    <body>
        <?php
        // La variable principal con los nombres de los equipos.
        $equipos = ["Real Madrid", "Real Betis", "Real Sociedad",
            "Villarreal", "FC Barcelona", "Sevilla", "Getafe", "Valencia",
            "Cádiz", "Granada", "Osasuna", "Atlético de Madrid",
            "Celta de Vigo", "Eibar", "Huesca", "Elche", "Alavés", "Levante",
            "Athletic Club", "Real Valladolid"];
        // <editor-fold defaultstate="collapsed" desc="Apartado A">
        //  generar dos arrays al azar de 10 elementos cada uno, $locales y 
        //  $visitantes, con los nombres de los equipos para hacer 
        //  los emparejamientos de una jornada. El código:
        echo '--------------APARTADO A) -------------';
        // Barajamos los equipos.
        shuffle($equipos);
        // Copiamos los 10 primeros elementos en la variable $locales.
        $locales = array_slice($equipos, 0, 10);
        // Copiamos los 10 ultimos elementos en la variable $visitantes.
        $visitantes = array_slice($equipos, 10);

        echo "<h5> LOCALES </h5> ";
        var_dump($locales);
        echo "<h5> VISITANTES </h5> ";
        var_dump($visitantes);
        // </editor-fold>
        // <editor-fold defaultstate="collapsed" desc="apartado B">
//Apartado B) generar dos arrays al azar de 10 elementos cada uno, 
//$golesLocales y $golesVisitantes, de 0 a 6 goles. El código:

        for ($contador = 0; $contador < 10; $contador++) {
            $golesLocales[$contador] = rand(0, 6);
            $golesVisitantes[$contador] = rand(0, 6);
        }



        echo '<br><br>--------------APARTADO B) -------------';

        echo "<h5> GOLES LOCALES </h5> ";
        var_dump($golesLocales);
        echo "<h5> GOLES VISITANTES </h5> ";
        var_dump($golesVisitantes);

// </editor-fold>               
        // <editor-fold defaultstate="collapsed" desc="Apartado C">
        //Apartado C) mostrar en pantalla los resultados de la jornada generada
        //Podéis hacerlo como queráis, pero debe quedar algo como:
        $tabla = "<table border='1'> <caption>RESULTADO DE JORNADA</caption>";
        //generamos cada fila de la tabla para cada partido $p
        for ($p = 0;$p < 10; $p++) {
            //Atlético de Madrid	3 - 4	Real Betis
            $tabla .="<tr><td>$locales[$p]</td>"
                . "<td>$golesLocales[$p]-$golesVisitantes[$p]</td>"
                    . "<td>$visitantes[$p]</td></tr>";
        }
        
        $tabla .="</table>";
        echo $tabla;
            
// </editor-fold>
    
        // <editor-fold defaultstate="collapsed" desc="Apartado D">
        //Apartado C) pero bonico!!!:
        $tabla = "<table border='1' id='tablaApartadoD'>"
                . " <caption>RESULTADO DE JORNADA</caption>";
        //generamos cada fila de la tabla para cada partido $p
        for ($p = 0;$p < 10; $p++) {
            //Atlético de Madrid	3 - 4	Real Betis
            $tabla .='<tr><td>'.$locales[$p].
                    '<img src="./escudosEquipos/'.$locales[$p].'.jpg"/></td>'.
                 "<td class='resultadosgoles'>$golesLocales[$p]-$golesVisitantes[$p]</td>";
                    
            $tabla .='<td style="text-align: left;"><img src="./escudosEquipos/'.$visitantes[$p].'.jpg"/>'
                    .$visitantes[$p].'</td></tr>';
        }
        
        $tabla .="</table>";
        echo $tabla;
            
// </editor-fold>
        
        
        
        
        ?>
    </body>
</html>
