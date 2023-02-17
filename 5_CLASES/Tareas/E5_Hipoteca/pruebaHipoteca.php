<?php
require './Hipoteca.php';
echo "ATENCION:<br>".
     Hipoteca::MENSAJE1.'</br>';
echo Hipoteca::MENSAJE2;
echo "<hr>";

echo "hipoteca con VALORES MALOS<br>";
$h=new Hipoteca(-10000,25 , 1);
echo $h->ficha();
echo "<hr>";

echo "HIPOTECA CORRECTA";
$h=new Hipoteca(12000, 7, 5);
echo $h->ficha();
echo '<br>';

echo "<b>CUADRO AMORTIZACION</b>";
echo $h->TablaAmortizacion();
