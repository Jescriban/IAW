<?php

//Devuelve la letra del NIF correspondiente a $numero o 
// "" si el numero no es correcto

function calculaLetraDelNIF($numero) {
    //letras del NIF
    $secuenciaLetrasNIF = "TRWAGMYFPDXBNJZSQVHLCKE";
    $resto = $numero % 23; // Tomamos el resto de dividir por 23
    //Devolvemos el caracter correspondiente a resto.
    return $secuenciaLetrasNIF[$resto];
}

//Valida un nif devuelve verdadero/falso
function verificadorNIF($nif) {
    //extraemos el numero del nif
    $numeroNIF = substr($nif, 0, 8);
    //Devolvemos la comparacion de la letra calculada y la real
    return (calculaLetraDelNIF($numeroNIF) == $nif[8]);
}

/*//probamos la funcion
$nif = "23523100";
echo "El nif $nif tiene la letra " . calculaLetraDelNIF($nif);
//probamos 2º funcion
echo '<br>';
if (verificadorNIF("76066294J")) {
    echo 'bien';
}
else {
    echo 'mal';
}
 */
?>

