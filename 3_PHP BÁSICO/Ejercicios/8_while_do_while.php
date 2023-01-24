<?php

/*
  //-----------------------------------------------------------------
  echo" 1 ----  while    ----------------------------<br>";
  //-----------------------------------------------------------------
  //vamos a tirar el dado MIENTRAS no salga un 6
  $dado = rand(1, 6);
  //para contar las veces que tiro el dado
  $contador = 1; // al menos tiro una vez
  //mientras NO sea 6 (!=)
  while ($dado != 6) {
  $contador++;
  echo "salio un $dado, merde!!!<br>";
  //lanzo otra vez el dado
  $dado = rand(1, 6);
  }
  echo "ha salido un 6 a la de $contador veces";
 */
//-----------------------------------------------------------------
echo" 2 ----  do .. while    ----------------------------<br>";
//-----------------------------------------------------------------
//vamos a tirar el dado HASTA que salga un 6
//para contar las veces que tiro el dado
$contador = 0; // al menos tiro una vez
do {
    //contamos cada vez que tiramos
    $contador++;
    //tiramos el dado
    $dado = rand(1, 6);
    //si no sale el 6 despotricamos
    if ($dado != 6) {
        echo "salio un $dado, merde!!!<br>";
    }
} while ($dado != 6);
echo "ha salido un 6 a la de $contador veces";

//modificaciones para hacer en clase:
# poner un $contador para ver a las de cuantas tiradas ha salido!!
# ha salido un 6  ala de 4 veces!
# fastidiar el while para que siempre se ejecute!
//ejercicio, tirar el dado y que ponga "hola" tantas veces como salga en el dado!!
