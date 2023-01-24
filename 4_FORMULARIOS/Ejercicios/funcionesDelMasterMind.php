<?php
//Genera una cadena con 4 digitos diferentes
function generaSecreto() {
    $numeroAlAzar = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    shuffle($numeroAlAzar);
    return $numeroAlAzar [0] . $numeroAlAzar[1] . $numeroAlAzar[2] .
            $numeroAlAzar[3];
}
echo "numero al azar = ".generaSecreto();
//Devuelve cuantos caracteres de $numero coincide en posición y en valor
//con los de $secreto, la longitud de los dos debe ser 4
function muertos($secreto, $numero) {
    $contador = 0;
    //recorremos ambas cadenas
    for ($p = 0; $p < 4; $p++) {
        if ($secreto[$p] == $numero[$p]) {
            $contador++;
        }
    }
    return $contador;
}

echo "<hr>los muertos entre 2345 y 8349 son ".muertos("2345", "8349");
//Devuelve cuantos caracteres de $numero ('2345') coincide en valor y no en posición 
//con los de $secreto ('8349'), la longitud de los dos debe ser 4
function heridos($secreto, $numero) {
    $contador = 0;
    //recorremos solo la cedena de número
    for ($p = 0; $p < 4; $p++) {
        //cuando $p es 1... strpos('8349','3')
        $posicionSecreta = strpos($secreto,$numero[$p]);
        //Si está que no sea un muerto por fa
        if($posicionSecreta !== False){
            //Y no coincide con la posición
            if($posicionSecreta !== $p){
                $contador++;
            }
        }
    }
    return $contador;
}
echo "<hr>los heridos entre 2345 y 8349 son ".heridos("2345", "8349");

//Muestra resultado con una $lista  y $secreto

function mostrarResultado ($lista,$secreto){
    foreach ($lista as $numero){
        echo $numero .'/'.muertos($secreto, $numero).'/'
                .heridos($secreto, $numero)."<br>";
    }
}

