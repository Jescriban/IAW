<?php

//phpinfo();
/* Ejercicio de conexión a una BD MySQL desde PHP
  EL servidor debe estar en funcionamiento, y para hacer la prueba se debe tener
  ejecutado el script CreaTabla.sql en el motor de base de datos
 */

// Conectamos, podemos usar constantes para conectarnos o variables
define("DB_SERVER", "localhost");
define("DB_USER", "jaime");
define("DB_PASSWORD", "MARZ0K");
define("DB_DATABASE", "test");

$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

//COMPROBAMOS LA CONEXION
if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "numero de error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "texto de error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit();
}

// almacenamos la consulta en una variable
$consulta = "SELECT * FROM cliente";

//lanzamos la consulta y la recogemos en $resultado
$resultado = mysqli_query($conexion, $consulta);

//si no funciona la consulta, notificamos y nos vamos
if (!$resultado) {
    echo 'La sentencia ha fallado.<br>';
    echo "Error: %s\n" . mysqli_error($conexion);
    exit();
}

// $resultado es un objeto de la clase mysqli_result
// recorriendo $resultado como un array asociativo....
echo "Nuestros clientes son: <br> <ul> ";
while ($tupla = mysqli_fetch_assoc($resultado)) {
    echo "<li> " . $tupla['nombre'] .
    " con dni " . $tupla['dni'] . " </li>";
}
echo "</ul>\n";

// Liberamos el resultado de la consulta en MEMORIA
// y así podemos volver a usar $result
mysqli_free_result($resultado);

// Cerramos la conexión y lo notificamos
if (!mysqli_close($conexion)) {
    echo "<h2>No se ha cerrado la conexión</h2>";
    echo "Error: %s\n" . mysqli_error($conexion);
}
?>