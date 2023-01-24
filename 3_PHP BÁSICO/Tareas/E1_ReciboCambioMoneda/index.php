<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Variables que vamos a usar
        $nombreCliente = "Fulanito Pérez Pérez";
        $entrega = 520.50;
        $recibe = $entrega*1.01;
        $fecha = "en Granada a ". date("l", mktime(0, 0, 0, 7, 1, 2000);
        echo "SU RECIBO DE CAMBIO DE EUROS A DOLARES";
        //Generamos la variable $recibo
        $recibo = "<table border=1>";
        $recibo .= "<tr><td colspan=2>SR/A. "
                . $nombreCliente . " </td></tr>";
        $recibo .= "<tr><td>entrega ".
                $entrega. ' €'. "</td><td>recibe ".
                $recibe. ' $'."</td></tr>";
        $recibo .= "<tr><td colspan=2>"
                . $fecha . " </td></tr>";
        $recibo .= "</table>";
        //Escribimos la variable
        echo $recibo
        ?>
    </body>
</html>
