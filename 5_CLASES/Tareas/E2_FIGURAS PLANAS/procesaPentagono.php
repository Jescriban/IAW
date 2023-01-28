<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require './clases/Pentagono.php';
if(!empty($_POST['lado']) && !empty($_POST['apotema'])){
    echo '<h2>RESULTADOS DEL PENTAGONO</h2>';
    $miPentagono = new Pentagono($_POST['lado'], $_POST['apotema']);
    echo $miPentagono->ficha();
    echo '<br><form action="menuFigurasPlanas.html"/>';
    echo '<input type="submit" value="VOLVER AL MENU"/>';
    echo '</form>';
}else{
    echo '<h2>sorry :(</h2>';
    echo 'Introduce todos los datos de la figura';
    echo '<br><button onclick="history.back()">VOLVER</button>';
}

