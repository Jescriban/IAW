<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require './clases/Cuadrado.php';
if (!empty($_POST['lado'])) {
    echo '<h2>RESULTADOS DEL CUADRADO</h2>';
    $miCuadrado = new Cuadrado($_POST['lado']);
    echo $miCuadrado->ficha();
    echo '<br><form action="menuFigurasPlanas.html"/>';
    echo '<input type="submit" value="VOLVER AL MENU"/>';
    echo '</form>';
} else {
    echo '<h2>sorry :(</h2>';
    echo 'Introduce todos los datos de la figura';
    echo '<br><button onclick="history.back()">VOLVER</button>';
}