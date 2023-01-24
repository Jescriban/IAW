<?php

//-----------------------------------------------------------------

/* //-----------------------------------------------------------------
  #hacer un pedido de frutas al azar pero con un máximo de kilos
  $cestaFrutas=['Peras','Limones','Cerezas','Naranjas','Uvas','Manzanas'];
  $totalKilos=0;
  $maximoKilos=10;
  foreach ($cestaFrutas as $fruta) {
  //generamos los kilos de una fruta
  $kilos=rand(0,5);
  //los sumamos a los que llevamos
  $totalKilos=$totalKilos+$kilos;
  //si nos pasamos se acabó la compra!!
  if ($totalKilos>$maximoKilos){
  break;
  }
  //pedimos al tendero/a
  echo "dame $kilos kilos de $fruta <br>";
  }

  //-----------------------------------------------------------------
  echo" 4 ----  continue    ----------------------------<br>";
  //-----------------------------------------------------------------
  #hacer un pedido de frutas al azar pero sin decir la frase
  #dame 0 kilos de "algo"... por dios!
  foreach ($cestaFrutas as $fruta) {
  //generamos los kilos de una fruta
  $kilos=rand(0,5);
  //si salen 0 kilos, nos saltamos la petición!!
  if ($kilos==0){
  continue;
  }
  //pedimos al tendero/a
  echo "dame $kilos kilos de $fruta <br>";
  }

  //hacer en clase...c9_pedidoFrutas.php combinar los dós últimos códigos y que
  // salga el total de frutas
  #hacer un pedido de frutas al azar pero con un máximo de kilos
  $cestaFrutas = ['Peras', 'Limones', 'Cerezas', 'Naranjas', 'Uvas', 'Manzanas'];
  $totalKilos = 0;
  $maximoKilos = 10;
  $numeroFrutas= 0;
  foreach ($cestaFrutas as $fruta) {
  $kilos=rand(0,5);
  //si salen 0 kilos, nos saltamos la petición!!
  if ($kilos==0){
  continue;
  }
  //los sumamos a los que llevamos
  $totalKilos = $totalKilos + $kilos;
  //si nos pasamos se acabó la compra!!
  if ($totalKilos > $maximoKilos) {
  $totalKilos = $totalKilos - $kilos;
  break;
  }

  //pedimos al tendero/a
  $numeroFrutas++;
  echo "dame $kilos kilos de $fruta <br>";
  }
  echo "Te llevas $numeroFrutas frutas y $totalKilos kilos";
 */

////hacer en clase...c9_pedidoFrutasPrecio.php  usar un array asociativo con clave "nombre de la fruta" y
// valor el precio... del tipo "Peras"=>2.15, "Limones"=>0.80 ...
$cestaFrutas = ['Peras' => 2.15, 'Limones' => 0.80, 'Cerezas' => 1.20, 'Naranjas' => 2.40,
    'Uvas' => 2.85, 'Manzanas' => 1.30];
// Declaramos los totales y los contadores
$numeroFrutas = 0;
$totalKilos = 0;
$totalEuros = 0;
//Declaramos el maximo de kilos y de precio
$maximoKilos = 10;
$maximoPrecio = 20;
// Usaremos la variable $ticket para almacenar el html del ticket
$ticket = "<table border=1px;>";
// Cabecera de la tabla
$ticket .= "<tr>";
$ticket .= "<th> Fruta </th>";
$ticket .= "<th> Cantidad (kg) </th>";
$ticket .= "<th> Precio</th>";
$ticket .= "</tr>";
// Generamos cada linea del ticket
foreach ($cestaFrutas as $fruta => $precio) {
// Generamos los kilos al azar
    $kilos = rand(0, 5);
// Calculamos el precio de la linea
    $preciolinea = $kilos * $precio;
    //si salen 0 kilos, nos saltamos la petición!!
    if ($kilos == 0) {
        continue;
    }
    //los sumamos a los que llevamos
    $totalKilos = $totalKilos + $kilos;
    //si nos pasamos se acabó la compra!!
    if ($totalKilos > $maximoKilos) {
        $totalKilos = $totalKilos - $kilos;
        break;
    }
// Incrementamos el numero de frutas
    $numeroFrutas++;

    //pedimos al tendero/a

    $ticket .= "<tr>" . "<td>$fruta</td>" . "<td>$kilos</td>" .
            "<td> $preciolinea €</td>" . "</tr>";
// Sumamos la linea total
    $totalEuros = $totalEuros + $preciolinea;
    // Si nos pasamos del maximo $maximoPrecio restamos el $preciolinea
    // Y salimos
    if ($totalEuros >= $maximoPrecio) {
        $totalEuros = $totalEuros - $preciolinea;
        break;
    }
}
$ticket .= "<tr>" . "<th>TOTAL</th>" . "<td>$totalKilos</td>" . "<td>$totalEuros €</td>" . "</tr>";
$ticket .= "</table>";
$ticket .= "<br> gracias por su compra";
//Imprimo el ticket
echo $ticket;
//hacer la compra al azar pero que salga el ticket, con el precio individual 
//y los totales de kilos y euros.
?>