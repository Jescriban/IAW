<?php

// <editor-fold defaultstate="collapsed" desc="BASICO">
/*
  //una función...para calcular el área de un circulo!!
  //declaracion
  function areaCirculo($radio) {
  $area = pi() * ($radio ** 2);//no ^ que es el xor
  var_dump($area);
  return $area;
  }

  //uso
  $radioRotonda = 22.5;
  echo "se necesitan " . areaCirculo($radioRotonda) . " m2 de cesped. <br>";
  echo "se necesitan " . areaCirculo(1) . " m2 de cesped. <br>";
  echo "se necesitan " . areaCirculo(rand(2,5)) . " m2 de cesped. <br>";

  //para saludar según sea la hora del día,
  // debe decir buenos días (antes de las 12),
  // buenas tardes (antes de las 20)  o buenas noches.
  //

  function saludo($nombre) {
  //la variable que voy a devolver
  $mensaje = " sr/a " . $nombre;
  $hora = date('H');//'H' para formato 24horas
  var_dump($hora);
  //según sea la hora le ponemos el rpefijo
  if ($hora < 12) {
  $mensaje = "buenos dias, " . $mensaje;
  } elseif ($hora < 20) {
  $mensaje = "buenas tardes, " . $mensaje;
  } else {

  $mensaje = "buenas noches, " . $mensaje;
  }

  return $mensaje;
  }
  //dejaremos que el rango sea desde las 3 de la mañana hasta
  // las 12 buenos días, y buenas noches desde las 20 hasta las 3 del dia
  // siguiente!.

  echo saludo("jaime");

  //para examen, modificar la función para que reciba el nombre
  // y, opcionalmente una hora
  // ejemplo saludo('Luis', rand(0,24));
  function saludo($nombre, $hora = null) {
  //la variable que voy a devolver
  $mensaje = " sr/a " . $nombre;
  //si no nos dan la $hora
  if ($hora == null) {
  $hora = date('H'); //'H' para formato 24horas
  }
  var_dump($hora);
  //según sea la hora le ponemos el rpefijo
  if ($hora < 12) {
  $mensaje = "buenos dias, " . $mensaje;
  } elseif ($hora < 20) {
  $mensaje = "buenas tardes, " . $mensaje;
  } else {

  $mensaje = "buenas noches, " . $mensaje;
  }

  return $mensaje;
  }

  //llamamos a la funcion
  echo saludo('Luis', rand(0, 24));
  echo "<hr>";
  echo saludo('Pepin', "78");
  echo "<hr>";
  echo saludo('pep', "patata");
  echo "<hr>";
  echo saludo('Maria Luisa');

 */
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="VARIABLES LOCALES Y GLOBALES">
/*
  ////variables locales y globales
  //esta es una variable global
  $mensaje = "ESTO ES UN MENSAJE DE SALUDO<br>";

  //declaramos la funcion que usa la variable local $mensaje
  function saludo($nombre) {
  //se crea la variable LOCAL... si no se pone global!!
  global $mensaje;
  $mensaje= "Hola sr/a $nombre <br>";
  return $mensaje;
  }

  //creamos una variable con mi nombre
  $yoBispo = 'jaime fernandez Ortega';
  echo "mensaje original: " . $mensaje . "<br>";
  echo saludo($yoBispo); //pasamos por la funcion
  echo "mensaje despues de la funcion: " . $mensaje . "<br>";
  echo "<br>";
  var_dump(($GLOBALS));
 */
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="DEVOLVER UN ARRAY">
/*
  //función cincoNumerosAlazar()
  //devuelve un array con 5 numéros del 1 al 100
  function cincoNumerosAlazar() {
  $resultado = array();
  for ($i = 0; $i < 5; $i++) {
  $resultado[] = rand(0, 100);
  }
  return $resultado;
  }

  $miBonoloto = cincoNumerosAlazar();
  var_dump($miBonoloto);

  //funcion muestraLista($lista)
  //devuelve un html con la lista de elementos verticalmente
  function muestraLista($lista) {
  $resultado = "<br>--lista de elementos--<br>";
  for ($i = 0; $i < 5; $i++) {
  $resultado = $resultado . $lista[$i] . "<br>";
  }

  return $resultado;
  }

  $misNumeros = cincoNumerosAlazar();
  echo muestraLista($misNumeros);
  echo muestraLista(cincoNumerosAlazar());
 */
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="LETRA NIF">
/*
  //Calcula la letra del NIF, pasamos solo el número!!
  function calculaLetraDelNif($numero) {
  ## se coge el numero, se toma el resto de dividir entre 23,
  #y hay una lista de letra que es...
  //cadena oficial de letras del NIF
  $letraNIF = 'TRWAGMYFPDXBNJZSQVHLCKE';
  //calcula el resto
  $resto = $numero % 23;
  var_dump($resto);
  return $letraNIF[$resto];
  }

  //uso
  echo "mi NIF (48685509) tiene letra " .
  calculaLetraDelNif(48685509) . "<br>";
 */
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="AREAS">
//hacer en clase una función para calcular el área de :
// Triángulo equilatero (lado)
// Rectangulo (base y altura)
//
// Polígono regular cualquiera, (numero de lados, lado y apotema)
// también (más ortodoxa!) :Área del polígono = ¼ × n × Lado**2 / tan(π/n)
function areaPoligonoRegularChapucera($numeroLados, $lado, $apotema) {
    return $numeroLados * $lado * $apotema / 2;
}

function areaPoligonoRegularCorrecta($numeroLados, $lado) {
    return $numeroLados * $lado * $lado / 4 * tan(pi() / $lado);
}

echo areaPoligonoRegularChapucera(6, 3, 2.59807) . "<br>";

echo areaPoligonoRegularCorrecta(6, 3) . "<br>";

/**/

// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="PASO POR REFERENCIA">
//funcion para ordenar $a y $b
function ordenaAB($a, $b) {
    if ($a > $b) {
        //intercambiamos sus valores (necesito otra variable claro!)
        $c = $a;
        $a = $b;
        $b = $c;
    }
    echo "dentro de la funcion: \$a vale $a y \$b vale $b <br>";
}

//uso
$a = 20;
$b = 10;
ordenaAB($a, $b);
echo "\$a vale $a y \$b vale $b <br>";

//paso por refencia!!
function ordenaAB_deVerdad(&$a, &$b) {
    if ($a > $b) {
        //intercambiamos sus valores (necesito otra variable claro!)
        $c = $a;
        $a = $b;
        $b = $c;
    }
    echo "dentro de la funcion: \$a vale $a y \$b vale $b <br>";
}

//uso
$a = 20;
$b = 10;
ordenaAB_deVerdad($a, $b);
echo "\$a vale $a y \$b vale $b <br>";

//error...
  //ordenaAB_deVerdad(15, 5);
  //Fatal error: Only variables can be passed by reference in ...

 /**/
// </editor-fold>