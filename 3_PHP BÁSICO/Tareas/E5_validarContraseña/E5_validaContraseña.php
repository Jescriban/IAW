<?php

/* escribir la función validaContraseña($contraseña): true/false 
 * la contraseña tiene que tener:
 * - longitud mínima de 8
 * - Mayúsculas y Minúsculas
 * - números
 * - símbolos especiales
 */

function validaContraseña($contraseña) {
    $valida = TRUE;
    if (strlen($contraseña) > 8) {
        for ($i = 0; $i < strlen($contraseña); $i++) {
            if (ctype_upper(substr($contraseña, $i, 1)) === true) {
                $i = strlen(contraseña) + 1;
            }
            for ($i = 0; $i < strlen($contraseña); $i++) {
                if (ctype_lower(substr($contraseña, $i, 1)) === true) {
                    $i = strlen(contraseña) + 1;
                }
                for ($i = 0; $i < strlen($contraseña); $i++) {
                    if (ctype_digit(substr($contraseña, $i, 1)) === true) {
                        $i = strlen(contraseña) + 1;
                    }
                }
                for ($i = 0; $i < strlen($contraseña); $i++) {
                    if (ctype_punct(substr($contraseña, $i, 1)) === true) {
                        $i = strlen(contraseña) + 1;
                    }
                }
            }
        return $valida;
    }

    $listaContraseñas = ['11111111111', 'Hola_comoEstas', "Mi#contraseña@2"];

//Recorremos la $listaContraseñas y mostramos en pantalla si es buena o no

    foreach ($listaContraseñas as $contraseña) {
        echo "la contraseña $contraseña es ";
        if (validaContraseña($contraseña)) {
            echo 'Buena';
        } else {
            echo 'Mala';
        }
        echo '<br>';
    }    