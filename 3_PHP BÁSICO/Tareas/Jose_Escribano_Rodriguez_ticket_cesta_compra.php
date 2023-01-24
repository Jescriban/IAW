<?php

$cestaFrutas = ['Peras'=>2.15, 'Limones'=>0.80, 'Cerezas'=>1.20, 'Naranjas'=>2.40, 
        'Uvas'=>2.85, 'Manzanas'=>1.30];
    //var_dump($cestaFrutas);
    $totalKilos = 0;
    $maximoKilos = 10;
    $numeroFrutas = 0;
    $totalEuros=0;
    $maximoEuros = 0;
    //Usaremos una variable para guardar el html
    $tabla = "<table border=1px>";
    //Cabecera de la tabla
    $tabla .= "<tr>";
    $tabla .= "<th> Fruta </th>";
    $tabla .= "<th> Cantidad (kg) </th>";
    $tabla .= "<th> Precio kg/€ </th>";
    $tabla .= "<th>Precio total</th>";
    $tabla .= "</th>";
    //Generamos los kilos al azar
    foreach ($cestaFrutas as $fruta=>$precio) {
        //generamos los kilos de una fruta
        $kilos = rand(0, 5);
        //Calculamos el total de la línea.
        $totalLinea = $kilos*$precio;
        if ($maximoEuros == 0 and $fruta == 'Peras') {
            $maximoEuros = $totalLinea;
        
        }else {
            $maximoEuros = $maximoEuros + $totalLinea;
        }
        //comprobamos el precio
        if ($maximoEuros > 20) {
            $maximoEuros = $maximoEuros - $totalLinea;
            break;
        }
        //si es 0 nos saltamos todo para esa $fruta
        if ($kilos == 0) {
            continue;
        }
        //los sumamos a los que llevamos
        $totalKilos = $totalKilos + $kilos;
        $totalEuros = $totalEuros+$totalLinea;
        //si nos pasamos se acabó la compra!!
        if ($totalKilos > $maximoKilos) {
         //restamos los kilos sobrantes 
             $totalKilos = $totalKilos - $kilos;
            break;
        }
        //pedimos al tendero/a       
        $tabla .= "<tr>" . "<td>$fruta</td>" . "<td>$kilos</td>" . "<td>$precio €</td>" . "<td>$totalLinea</td>" . "</tr>";
        $numeroFrutas++;
    }
    //Calculamos el total
    $tabla .= "<tr>" . "<td>TOTAL</td>" . "<td>$totalKilos</td>" . "<td></td>" . "<td>$maximoEuros €</td>" . "</tr>";
    $tabla .= "</table>";
    echo $tabla;
?>