<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'datosRestaurante.php';
        include 'cocina.php';
        include 'funcionesRestaurante';
        shuffle($primeros);
        shuffle($segundos);
        shuffle($postres);
        echo "<h2></h2>";
        echo '<h2>mediaPrecios($listaPlatos)</h2>';
        echo "el precio medio de mis segundos es: " . mediaPrecios($segundos) . "€";
        echo "<tr>";
        echo "<h2>Rte. -->" . nombreRestaurante . "<--</h2>";
        echo "Menú de hoy " . date('D') . "<hr>";
        //PRIMEROS
        echo "PRIMEROS<br>";
        for ($index = 0; $index < 2; $index++) {
            echo $primeros[$index] . " - ";
        }
        //SEGUNDOS
        echo "<br>SEGUNDOS<br>";
        //POSTRES
        echo "<br>POSTRES<br>";
        ?>
    </body>
</html>
