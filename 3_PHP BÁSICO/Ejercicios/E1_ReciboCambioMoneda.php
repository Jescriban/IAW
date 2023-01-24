<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Variables que vamos a usar
        $nombreCliente = "Fulanito Pérez Pérez";
        $cambioEuroDolar = 1.0 / 1.01;
        //la cantidad de entrega estará entre 1000 y 10000
        $entrega = rand(100, 1000)*10;
        //el recibe se calcula es la entrtega por el cambio
        $recibe = round($entrega * $cambioEuroDolar,0);
        //generamos la fecha en función de la del sistema
        //setlocale() permite especificar en que localiadad estamos...
        setlocale(LC_ALL, "spanish");
        //strftime() es parecido a date(), pero teniendo en cuenta donde estamos
        $fecha = strftime("en Granada a %A %d de %B del %Y"); 
        echo "SU RECIBO DE CAMBIO DE EUROS A DOLARES";
        //Generamos la variable $recibo
        $recibo = "<table border=1>";
        $recibo .= "<tr><td colspan=2>SR/A. "
                . $nombreCliente . "</td></tr>";
        $recibo .= "<tr><td>entrega " .
                $entrega . "€</td><td>recibe " .
                $recibe . "$</td></tr>";
        $recibo .= "<tr><td colspan=2>"
                . $fecha . "</td></tr>";

        $recibo .= "</table>";
        //Escribimos la variable
        echo $recibo;
        ?>
    </body>
</html>
