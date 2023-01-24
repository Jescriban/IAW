<?php
require './clases/Circulo.php';

if (isset($_POST['radio'])){
    echo "<h2> RESULTADOS DEL CIRCULO </h2><br>";
    $miCirculo = new Circulo($_POST['radio']);
    echo $miCirculo->ficha();
} else {
    echo 'No se ha recibido el radio, sorry :( <br/>';
}
echo '<br><form action="menuFigurasPlanas.html"/>';
echo '<input type="submit" value="VOLVER AL MENU"/>';
echo '</form>';
