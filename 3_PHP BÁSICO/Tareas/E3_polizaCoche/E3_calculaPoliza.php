<?php
include './E3_MQNTHFFuncionesFormulario.php';
ECHO var_dump($_POST);
$precioBase = 200;
$precioFinal = 0;

$nombre = $_POST["nombre"];
$añoCarnet = $_POST["añoCarnet"];
$sexo = $_POST["sexo"];
$matricula = $_POST["matricula"];
$añoMatricula = $_POST["añoMatricula"];
$tipoCombustible = $_POST["tipoCombustible"];
$tipoSeguro = $_POST["tipoSeguro"];

echo $precioFinal . "<br/>";
$precioFinal = $precioFinal + calculaTomador($precioBase, $añoCarnet, $sexo);
echo $precioFinal . "<br/>";
$precioFinal = $precioFinal + calculaVehiculo($precioFinal, $añoMatricula, $tipoCombustible);
echo $precioFinal . "<br/>";
$precioFinal = $precioFinal + calculaModalidad($precioFinal, $tipoSeguro);
echo $precioFinal . "<br/>";

echo "Su precio final es de " . $precioFinal;
        