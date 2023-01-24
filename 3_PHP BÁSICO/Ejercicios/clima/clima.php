<?php
echo '<div style="font-family: monospace; font-size: 40px;"';
$temperaturas = array("Enero"=>"12.6", "Febrero"=>"13.8", "Marzo"=>"17",
    "Abril"=>"19", "Mayo"=>"25", "Junio"=>"31.4", "Julio"=>"34",
    "Agosto"=>"34", "Septiembre"=>"28", "Octubre"=>"23",
    "Noviembre"=>"16", "Diciembre"=>"13");

echo "<h1>Gráficos Temperaturas Mensuales</h1>";
echo "<br><br><br>";


foreach ($temperaturas as $mes => $grados) {
    echo str_pad($mes, 15, "-").">";
    for ($index = 0; $index < $grados; $index++) {
        echo "<img src=\"barraTemp.PNG\" style=\"border: 1px solid black\"/>";
    }
    echo "$grados"."ºC";
    echo "<br>";
    
}
echo "</div>";