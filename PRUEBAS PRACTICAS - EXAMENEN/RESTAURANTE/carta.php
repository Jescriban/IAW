<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carta</title>
    </head>
    <body>
        <?php
        include 'datosRestaurante.php';
        include 'cocina.php';
        include 'funcionesRestaurante';
        echo '<h2>mediaPrecios($listaPlatos)</h2>';
        echo "el precio medio de mis segundos es: " . mediaPrecios($segundos) . "€";
        echo "<tr>";
        echo "<h2>Rte. -->" . nombreRestaurante . "<--</h2>";
        echo "<h3>Lista de precios</h3><hr>";
        //LISTA PARA LOS PRIMEROS
        echo "<br>Primeros Platos<br>";
        foreach ($primeros as $nombrePlato => $precioPlato) {
            echo str_pad($nombrePlato, 35, '.') . $precioPlato . "€<br>";
        }
        //LISTA PARA LOS SEGUNDOS
        echo "<br>Segundos Platos<br>";
        foreach ($segundos as $nombrePlato => $precioPlato) {
            echo str_pad($nombrePlato, 35, '.') . $precioPlato . "€<br>";
        }
        //LISTA PARA LOS POSTRES
        echo "<br>Postres<br>";
        foreach ($postres as $nombrePlato => $precioPlato) {
            echo str_pad($nombrePlato, 35, '.') . $precioPlato . "€<br>";
        }
        //IVA INCLUIDO
        echo "<br>" . $iva . "% IVA INCLUIDO<hr>"
        ?>
    </body>
</html>

