<?php

/*
  //-----------------------------------------------------------------
  echo" 1 ----  for    ----------------------------<br>";
  //-----------------------------------------------------------------
  //for (expr1; expr2; expr3)
  //    sentencia
  //
  //mostra los 10 primeros números enteros
  for ($n = 0;$n<10 ; $n++) {
  echo " $n";
  }
  echo "he terminado";
  // expre1 -> $n = 0, se evalua una sola vez, la primera
  // expre2 -> $n < 10 , se evalua cada vez que se ejecuta sentencia,
  //                      si false se sale del bucle
  // expre3 -> $n++ , se evalua cada vez que ejecuta sentencia

  //PARA HACER EN CLASE
  #mostrar los 100 primeros numeros pares (0 al 198)
  //Creo la variable $numero que contendrá el número que queremos sacar
  $numero = 0;
  //Recorro todos los números del 0 al 198
  while ($numero <= 198) {
  //compruebo si el número es par
  if ($numero % 2 == 0) {
  echo " - " . $numero ;
  }
  //Le sumo uno a la variable para pasar al siguiente número.
  $numero++;
  }

  #mostrar los 100 primeros numeros pares (0 al 198)
  //Creo la variable $numero que contendrá el número que queremos sacar
  $numero = 0;
  //Recorro todos los números del 0 al 198
  while ($numero <= 198) {
  echo " - " . $numero;

  //Le sumo dos a la variable para pasar al siguiente número.
  $numero+= 2;
  }

  for ($numero = 0; $numero <= 198; $numero+=2) {
  echo " " . $numero;
  }


  // ------------- GENERADOR DE CLAVES

  //generar una clave de entre 8 y 15 caracteres
  //
  #$clave va a ir almacenando los caracteres
  $clave = '';
  #generamos un número al azar para saber cuantos caracteres hay que meter
  $numeroTotalDeCaracteres = rand(8, 15);
  //lanzamos un bucle para ir generando cada caracter
  //
  for ($i = 0; $i < $numeroTotalDeCaracteres; $i++) {
  //generamos el código ASCII al azar (ver una tabla ASCII)
  $numeroDeCaracterAlAzar = rand(33, 127);
  //convertimos el código en un caracter con chr()
  $caracter = chr($numeroDeCaracterAlAzar);
  //lo concatenamos a $clave
  $clave = $clave . $caracter;
  }
  echo "<br>tu clave es <h1>$clave</h1><br>";

  //PARA HACER EN CLASE
  #restringir la clave sólo a letras y números...
  //generar una clave de entre 8 y 15 caracteres que sean número o letras
  //
  #$clave va a ir almacenando los caracteres
  $clave = '';
  #generamos un número al azar para saber cuantos caracteres hay que meter
  $numeroTotalDeCaracteres = rand(8, 15);
  //lanzamos un bucle para ir generando cada caracter
  //
  for ($i = 0; $i < $numeroTotalDeCaracteres; $i++) {
  //generamos el código ASCII al azar (ver una tabla ASCII)
  //    $numeroDeCaracterAlAzar = rand(33, 127);
  //minusculas 97 a 122
  //mayusculas de 65 a 90
  //números del 48 al 57
  //al azar si es un numero, mayuscula o minuscula!!
  $tipoCaracter = rand(0, 2);
  //segun el tipo de caracter lo sacamos al azar
  if ($tipoCaracter == 0) {  //minuscula
  $numeroDeCaracterAlAzar = rand(97, 122);
  } elseif ($tipoCaracter == 1) {  //mayuscula
  $numeroDeCaracterAlAzar = rand(65, 90);
  } else {  //es numero
  $numeroDeCaracterAlAzar = rand(48, 57);
  }
  //convertimos el código en un caracter con chr()
  $caracter = chr($numeroDeCaracterAlAzar);
  //lo concatenamos a $clave
  $clave = $clave . $caracter;
  }
  echo "<br>tu clave es <h1>$clave</h1><br>";

  //PARA HACER EN CLASE

  #restringir la clave sólo a letras y números...
  //generar una clave de entre 8 y 15 caracteres que sean número o letras,
  //al menos uno de cada
  //
  #$clave va a ir almacenando los caracteres
  $clave = chr(rand(97, 122)).chr(rand(65, 90)). chr(rand(48, 57));

  #generamos un número al azar para saber cuantos caracteres hay que meter
  $numeroTotalDeCaracteres = rand(8, 15)-3;
  //lanzamos un bucle para ir generando cada caracter
  //
  for ($i = 0; $i < $numeroTotalDeCaracteres; $i++) {
  //generamos el código ASCII al azar (ver una tabla ASCII)
  //    $numeroDeCaracterAlAzar = rand(33, 127);
  //minusculas 97 a 122
  //mayusculas de 65 a 90
  //números del 48 al 57
  //al azar si es un numero, mayuscula o minuscula!!
  $tipoCaracter = rand(0, 2);
  //segun el tipo de caracter lo sacamos al azar
  if ($tipoCaracter == 0) {  //minuscula
  $numeroDeCaracterAlAzar = rand(97, 122);
  } elseif ($tipoCaracter == 1) {  //mayuscula
  $numeroDeCaracterAlAzar = rand(65, 90);
  } else {  //es numero
  $numeroDeCaracterAlAzar = rand(48, 57);
  }
  //convertimos el código en un caracter con chr()
  $caracter = chr($numeroDeCaracterAlAzar);
  //lo concatenamos a $clave
  $clave = $clave . $caracter;
  }
  //movemos la clave ..... a ver si lo hacéis el finde
  //convertimos $clave a un array....
  $clave= str_split($clave);
  //barajamos el array $clave
  shuffle($clave);
  //convertimos $clave a un string otra vez
  $clave= implode("",$clave);
  echo "<br>tu clave es <h1>$clave</h1><br>";

  #restringir la clave sólo a letras y números...
  //generar una clave de entre 8 y 15 caracteres que sean número o letras,
  //al menos uno de cada
  //
  #$clave va a ser un array para ir almacenando los caracteres
  $clave []= chr(rand(97, 122));//Echamos una minuscula.
  $clave []= chr(rand(65, 90));//Echamos una mayuscula.
  $clave []= chr(rand(48, 57));//Echamos un numero.

  #generamos un número al azar para saber cuantos caracteres hay que meter
  $numeroTotalDeCaracteres = rand(8, 15)-3;
  //lanzamos un bucle para ir generando cada caracter
  //
  for ($i = 0; $i < $numeroTotalDeCaracteres; $i++) {
  //generamos el código ASCII al azar (ver una tabla ASCII)
  //    $numeroDeCaracterAlAzar = rand(33, 127);
  //minusculas 97 a 122
  //mayusculas de 65 a 90
  //números del 48 al 57
  //al azar si es un numero, mayuscula o minuscula!!
  $tipoCaracter = rand(0, 2);
  //segun el tipo de caracter lo sacamos al azar
  if ($tipoCaracter == 0) {  //minuscula
  $numeroDeCaracterAlAzar = rand(97, 122);
  } elseif ($tipoCaracter == 1) {  //mayuscula
  $numeroDeCaracterAlAzar = rand(65, 90);
  } else {  //es numero
  $numeroDeCaracterAlAzar = rand(48, 57);
  }
  //convertimos el código en un caracter con chr()
  $caracter = chr($numeroDeCaracterAlAzar);
  //lo añadimos al array $clave
  $clave []= $caracter;
  }
  //movemos la clave ..... a ver si lo hacéis el finde
  //barajamos el array $clave
  shuffle($clave);
  //Puerta trasera el elemento 5 ponemos una JOTA MAYUSCULA.
  $clave[]='hola tio';
  $clave [-40]="J";
  $clave[9]="x";
  $clave['kok']=0.1345;
  //que está pasando
  var_dump($clave);
  //convertimos $clave a un string otra vez
  $clave= implode("",$clave);
  echo "<br>tu clave es <h1>$clave</h1><br>";


  //-----------------------------------------------------------------
  echo" 2 ----  foreach    ----------------------------<br>";
  //-----------------------------------------------------------------
  #hacer un pedido de frutas al azar
  $cestaFrutas = ['Peras', 'Limones', 'Cerezas', 'Naranjas', 'Uvas'];
  shuffle($cestaFrutas); //por varfiar algo
  foreach ($cestaFrutas as $unaFruta) {
  echo "dame " . rand(0, 5) . " kilos de $unaFruta <br>";
  }



  //-----------------------------------------------------------------
  echo" 3 ----  break    ----------------------------<br>";
  //-----------------------------------------------------------------
  #hacer un pedido de frutas al azar pero con un máximo de kilos
  $cestaFrutas=['Peras','Limones','Cerezas','Naranjas','Uvas','Manzanas'];
  $totalKilos=0;
  $maximoKilos=10;
  foreach ($cestaFrutas as $fruta) {
  //generamos los kilos de una fruta
  $kilos=rand(0,5);
  //si es 0 nos saltamos todo para esa $fruta
  if ($kilos==0){
  continue;
  }
  //los sumamos a los que llevamos
  $totalKilos=$totalKilos+$kilos;
  //si nos pasamos se acabó la compra!!
  if ($totalKilos>$maximoKilos){
  break;
  }
  //pedimos al tendero/a
  echo "dame $kilos kilos de $fruta <br>";
  }
  /*

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
$cestaFrutas = ['Peras', 'Limones', 'Cerezas', 'Naranjas', 'Uvas', 'Manzanas'];
$totalKilos = 0;
$maximoKilos = 10;
$numeroFrutas = 0;
foreach ($cestaFrutas as $fruta) {
    //generamos los kilos de una fruta
    $kilos = rand(0, 5);
    //si es 0 nos saltamos todo para esa $fruta
    if ($kilos == 0) {
        continue;
    }
    //los sumamos a los que llevamos
    $totalKilos = $totalKilos + $kilos;
    //si nos pasamos se acabó la compra!!
    if ($totalKilos > $maximoKilos) {
     //restamos los kilos sobrantes 
         $totalKilos = $totalKilos - $kilos;
        break;
    }

    //pedimos al tendero/a
    $numeroFrutas++;
    echo "dame $kilos kilos de $fruta <br>";
}
echo "te llevas $numeroFrutas frutas diferentes y $totalKilos kilos";
*/
//hacer en clase...c9_pedidoFrutasPrecio.php  usar un array asociativo con clave "nombre de la fruta" y
// valor el precio... del tipo "Peras"=>2.15, "Limones"=>0.80 ...
//hacer la compra al azar pero que salga el ticket, con el precio individual 
//y los totales de kilos y euros.
$cestaFrutas = ['Peras'=>2.15, 'Limones'=>0.80, 'Cerezas'=>1.20, 'Naranjas'=>2.40, 
    'Uvas'=>2.85, 'Manzanas'=>1.30];
//var_dump($cestaFrutas);
$totalKilos = 0;
$maximoKilos = 10;
$numeroFrutas = 0;
$totalEuros=0; 
foreach ($cestaFrutas as $fruta=>$precio) {
    //generamos los kilos de una fruta
    $kilos = rand(0, 5);
    //Calculamos el total de la línea.
    $totalLinea=$kilos*$precio;
    //si es 0 nos saltamos todo para esa $fruta
    if ($kilos == 0) {
        continue;
    }
    //los sumamos a los que llevamos
    $totalKilos = $totalKilos + $kilos;
    $totalEuros = $totalEuros+$totalLinea;
    //si nos pasamos se acabó la compra!!
    if ($totalKilos > $maximoKilos) {
     //restamos los kilos sobrantes 
         $totalKilos = $totalKilos - $kilos;
        break;
    }

    //pedimos al tendero/a
    $numeroFrutas++;
    echo "$kilos kilos de $fruta a $precio €/kg =$totalLinea<br>";
}
echo "te llevas $numeroFrutas frutas diferentes y "
        . "$totalKilos kilos por $totalEuros €";

/*
//array (clave=>valor) ... codigo => nombre
$profesorado = array('FHP' => 'FERNANDEZ HERRAIZ, PILAR',
    'FOJ' => 'FERNANDEZ ORTEGA, JAIME',
    'GCM' => 'GONZÁLEZ CAMPOY MARÍA ÁNGELES',
    'MAF' => 'MARTÍN ÁLVAREZ, FRANCISCO',
    'MRC' => 'MARTIN RUIZ, CARLOS',
    'MMV' => 'MONTERO MALAGÓN, VÍCTOR MANUEL',
    'MGMA' => 'MORENO GARRIDO, MIGUEL ÁNGEL',
    'PSA' => 'PLEGUEZUELOS SIERRA, AURORA',
    'SBM' => 'SIERRA BIEDMA, MERCEDES');

var_dump($profesorado);
echo '<br>---- con print_r <br>';
print_r($profesorado);

//FORMATO 1 de foreach
//foreach (expresión_array as $valor)
//  sentencias
//sólo se usa el valor, en este caso el nombre

echo "<br><h3>listado de profesorado</h3> <br>";
foreach ($profesorado as $nombre) {
    echo "$nombre<br>";
}

//FORMATO 2 de foreach
//foreach (expresión_array as $clave => $valor)
//    sentencias
//se usa la clave y el valor, en este caso el codigo y el nombre

echo "<br><h3>listado de profesorado con su código</h3><br>";
foreach ($profesorado as $codigo => $nombre) {
    echo "el/la profesor/a $nombre tiene el código $codigo<br>";  
}
*/