<?php

// Funcion para generar la tabla HTML
// // Recibe un array asociativo con conceptos e importes.
// Devlueve una tabla HTML.
function generaTabla($datos, $acumular=false, $cabecera=false){
    $tabla = "<table border='1'>";
    //Si hay cabecera se le añade
    if ($cabecera){
        $tabla .= "<tr>";
        foreach ($cabecera as $value) {
            $tabla .= "<th>$value</th>";
        }
        $tabla .= "</tr>";
    }
    
    //Creamos un acumulador por si hay que acumular
    $acumulador=0;
    //Recorremos cada elementos de los datos.
    foreach ($datos as $clave => $valor) {
        $tabla .= "<tr><td>$clave</td><td>$valor</td>";
        //si hay que acumular añadimos una columna
        if ($acumular){
            $acumulador += $valor;
            $tabla.= "<td>$acumulador</td>";
        }
        //Cerramos la fila
        $tabla .= "</tr>";
    }
    $tabla .= "</table>";
    return $tabla;
}