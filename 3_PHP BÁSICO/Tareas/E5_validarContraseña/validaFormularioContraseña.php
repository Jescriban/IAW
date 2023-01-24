<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include './funcionesValidaContraseña.php';
// Recogemos la contraseña del formulario.
$contraseña = $_POST['contraseña'];
// Sacamos el mensaje
if (validaContraseña($contraseña)){
    echo "Buena";
} else {
    echo "Mala";
}

