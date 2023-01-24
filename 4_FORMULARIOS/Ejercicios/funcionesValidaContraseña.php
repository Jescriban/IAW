<?php

/* escribir la función validaContraseña($contraseña): true/false 
 * la contraseña tiene que tener:
 * - longitud mínima de 8
 * - Mayúsculas y Minúsculas
 * - números
 * - símbolos especiales
 */

// Funcion para saber si hay al menos una mayúscula.
function tieneMayusculas($contraseña) {
    //recorro la contraseña
    for ($i = 0; $i < strlen($contraseña); $i++) {
        //comprobamos la letra
        $letra = $contraseña[$i];
        if (ctype_upper($letra)) {
            return true;
        }
    }
    return false;
}

// Funcion para saber si hay al menos una minuscula
function tieneMinusculas($contraseña) {
    for ($i = 0; $i < strlen($contraseña); $i++) {
        //comprobamos la letra
        $letra = $contraseña[$i];
        if (ctype_lower($letra)) {
            return true;
        }
    }
    return false;
}

// Funcion para saber si hay al menos un numero
function tieneNumeros($contraseña) {
    for ($i = 0; $i < strlen($contraseña); $i++) {
        //comprobamos la letra
        $letra = $contraseña[$i];
        if (ctype_digit($letra)) {
            return true;
        }
    }
    return false;
}

// Funcion para saber si hay simbolos especiales
function tieneSimbolosEspeciales($contraseña) {
    for ($i = 0; $i < strlen($contraseña); $i++) {
        //comprobamos la letra
        $letra=$contraseña[$i];
        if(!tieneMayusculas($letra) & 
            !tieneMinusculas($letra) &
            !tieneNumeros($letra)){
            return true;
        }
    }
    return false;
}

function validaContraseña($contraseña) {
    return (strlen($contraseña) >= 8) & //Validamos la longitud
            tieneMayusculas($contraseña) & // Tiene mayusculas
            tieneMinusculas($contraseña) & // Tiene minusculas
            tieneNumeros($contraseña) & // Tiene numeros
            tieneSimbolosEspeciales($contraseña); // Tiene Simbolos Especiales
}
/*
$listaContraseñas = ['11111111111', 'Hola_comoEstas', "Mi#contraseña@2", "hola", "aA2222trjbkviyg"];

//Recorremos la $listaContraseñas y mostramos en pantalla si es buena o no

foreach ($listaContraseñas as $contraseña) {
    echo "la contraseña $contraseña es ";
    if (validaContraseña($contraseña)) {
        echo 'Buena';
    } else {
        echo 'Mala';
    }
    echo '<br>';
 */
