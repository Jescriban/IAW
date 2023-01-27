<?php

require './clases/Trapecio.php';
if (!empty($_POST['baseMayor']) && !empty($_POST['baseMenor']) && !empty($_POST['altura'])) {
    echo '<h2>RESULTADOS DEL TRAPECIO</h2>';
    $miTrapecio = new Trapecio($_POST['baseMayor'], $_POST['baseMenor'], $_POST['altura']);
    echo $miTrapecio->ficha();
    echo '<br><form action="menuFigurasPlanas.html"/>';
    echo '<input type="submit" value="VOLVER AL MENU"/>';
    echo '</form>';
} else {
    echo '<h2>sorry :(</h2>';
    echo 'Introduce todos los datos de la figura';
    echo '<br><button onclick="history.back()">VOLVER</button>';
}