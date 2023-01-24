<?php
require './clases/Tv.php';
$teleNueva = new Tv("Sansun 4ca",580.50,55);
//veamos la información técnica y el estado actual de la tele...
echo "Datos técnicos: ". $teleNueva->informacionTecnica();
echo "</br>";
echo "Estado Actual: ". $teleNueva->estadoActual();
$teleNueva->encender();
echo "</br>";
echo "Estado Actual: ". $teleNueva->estadoActual();

//var_dump($teleNueva);



