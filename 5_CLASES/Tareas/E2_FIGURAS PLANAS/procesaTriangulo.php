<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require './clases/Triangulo.php';
if (!empty($_POST['base']) && !empty($_POST['altura'])) {
    echo '<h2>RESULTADOS DEL TRIANGULO</h2>';
    $miTriangulo = new Triangulo($_POST['base'], $_POST['altura']);
    echo $miTriangulo->ficha();
    echo '<br><form action="menuFigurasPlanas.html"/>';
    echo '<input type="submit" value="VOLVER AL MENU"/>';
    echo '</form>';
} else {
    echo '<h2>sorry :(</h2>';
    echo 'Introduce todos los datos de la figura';
    echo '<br><button onclick="history.back()">VOLVER</button>';
}
