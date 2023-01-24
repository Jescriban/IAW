<?php

/*
  //almacenamos el día de la semana (en número)
  $diaSemanaNumero=date();
  var_dump($diaSemanaNumero);

  //usamos un switch
  switch ($diaSemanaNumero) {
  case 0:
  echo'Domingo';
  echo "bien!!!!";
  break;
  case 1: echo'Lunes';
  break;
  case 2: echo'Martes';
  break;
  case 3: echo'Miercoles';
  break;
  case 4: echo'Jueves';
  break;
  case 5: echo'Viernes';
  echo "olee";
  break;
  case 6: echo 'Sábado';
  default : echo "npi";
  }

  $elDos = 2;
  //variantes....
  //sin break ... se ejecuta el resto! hasta un break
  $diaSemanaNumero = 2;
  //usamos un switch
  switch ($diaSemanaNumero) {
  case 0: echo'Domingo';
  case 1: echo'Lunes';
  case $elDos: echo'Martes';
  case 3: echo'Miercoles';
  case 4: echo'Jueves';
  break;
  case 5: echo'Viernes';
  case 6: echo 'Sábado';
  }

  //dos cases seguidos para la misma sentencia
  $diaSemanaNumero = random(0,6);

  //usamos un switch
  switch ($diaSemanaNumero) {

  case rand(0,3): echo'Lunes';
  break;
  case 2: echo'Martes';
  break;
  case 3: echo'Miercoles';
  break;
  case 4: echo'Jueves';
  break;
  case 5: echo'Viernes';
  break;

  case 0:
  case 6: echo 'fin de semana';
  }
 */

$diaSemanaNumero = rand(0, 6);

//usamos un switch con un case que es una funcion
switch ($diaSemanaNumero) {
    case rand(0, 3):
        echo $diaSemanaNumero;
}
/*
//default
$diaSemanaNumero = 70;
//usamos un switch
switch ($diaSemanaNumero) {

    case 1:
        echo'Lunes';
        break;
    case 2:
        echo'Martes';
        break;
    case 3:
        echo'Miercoles';
        break;
    case 4:
        echo'Jueves';
        break;
    case 5:
        echo'Viernes';
    default :
        echo 'fin de semana';
        break;
}

*/
