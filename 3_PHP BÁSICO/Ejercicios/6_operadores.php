<?php

/*
  $x = 10;
  #usar paréntesis aunque no hagan falta
  $ecuación = 4 * $x * $x * $x + 17 / 4 * $x * $x + 6;
  $ecuación = 4 * ($x * $x * $x) + (17 / 4) * ($x * $x) + 6;
  //----> mostrar el valor de $ecuación (al menos de tres formas diferentes!)

  //conversión si se puede!
  $valor = "10f";
  echo 15 + $valor;
  echo "quince" + $valor;
  echo "<br>--------------<br>";


  # asignación

  $a = ($b == 4) + 5; // ahora $a es igual a 9 y $b se ha establecido en 4.
  //precedencia de operadores!!
  var_dump($b);

  $edad = 60;
  if ($edad == 65) {
  echo "<br>JUBILACIÓN!!!<br>";
  }
  //cuanto vale $edad
 

//usar un valor en una expresión y entonces establecer su valor
// como el resultado de esa expresión
$sueldo = 850;
$sueldo += 100;
var_dump($sueldo);
echo "<br>";
//partimos del nombre
$nombre = "Jaime";
//le añado (concateno) el primer apellido
$nombre = $nombre . " Fernandez";
//le añado (concateno) el segundo apellido
$nombre .= " Ortega";
//le pongo delante (concateno) el D.
$nombre = "D. " . $nombre;

echo $nombre;


 # COMPARACION
 
$a = "5";
$b = 5;
//solo comparamos el valor
if ($a == $b) {
    echo "<br>tienen el mismo valor pero no el mismo tipo<br>";
}
//se compara el valor y el tipo 
if ($a === $b) {
    echo "tienen el mismo valor y el mismo tipo!!!<br>";
}


//operadores LÓGICOS
//CURIOSIDAD!!

$resultado = FALSE || TRUE; //bool(true)
var_dump($resultado);

$resultado = FALSE or TRUE; //bool(false) 
var_dump($resultado);

$resultado = TRUE or FALSE or TRUE; //bool(false) 
var_dump($resultado);


*/
//precedencia de operadores, || va antes que =,
// pero or va despues, conclusión forzar paréntesis, 

#para string, el operador . (concatenar)
$añoActual=2020;
echo "Pepe tiene ". -(1962-$añoActual). "años";

#los operadores . y + tienen la misma precedencia
$var=3;
echo "Resultado: " . $var + 5;
echo "<br>--------------<br>";
echo "Resultado: " . ($var + 5);
/**/
