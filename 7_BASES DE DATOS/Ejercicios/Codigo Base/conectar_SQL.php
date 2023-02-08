<?php

//phpinfo();
/* Ejercicio de conexión a una BD SQL SERVER desde PHP
  EL servidor debe estar en funcionamiento, y para hacer la prueba se debe tener
  ejecutado el script CreaTabla.sql en el motor de base de datos
 */

// Conectamos a //serverName\instanceName y a la base de datos test
$servidorSQL = "DESKTOP-U6TNJD6\SQL16_CASA"; //serverName\instanceName

// la información de conexion va en un array asociativo
//si queremos hacer la conexión con la autenticación de windows
// $informacionConexion = array("Database" => "test"));

$informacionConexion = array( "Database"=>"test", "UID"=>"sa", "PWD"=>"MARZ0K");
// ejecutamos la función para obyener la conexion
$conexion = sqlsrv_connect( $servidorSQL, $informacionConexion);

//COMPROBAMOS LA CONEXION
if (!$conexion) {
    // Si la conexión no tiene éxito lo notificamos y nos vamos
    echo "<h2>NO HA SIDO POSIBLE ESTABLECER LA CONEXIÓN</h2>";
    //paramos el proceso y mostramos información de error
    die(sqlsrv_errors());
}

// almacenamos la consulta en una variable
$consulta = "SELECT * FROM cliente";

//lanzamos la consulta y la recogemos en $resultado
$resultado = sqlsrv_query($conexion, $consulta);

//si no funciona la consulta, notificamos y nos vamos
if (!$resultado) {
    echo 'La sentencia ha fallado.<br>';
    die(sqlsrv_errors());
}

// recorriendo $resultado como un array asociativo....
echo "Nuestros clientes son: <br> <ul> ";
while ($tupla  = sqlsrv_fetch_array($resultado)) {
    echo "<li> " . $tupla['nombre'] .
    " con dni " . $tupla['dni'] . " </li>";
}
echo "</ul>\n";

// Liberamos el resultado de la consulta en MEMORIA
// y así podemos volver a usar $result
sqlsrv_free_stmt($resultado);

// Cerramos la conexión y lo notificamos
if (!sqlsrv_close($conexion)) {
    echo "<h2>No se ha cerrado la conexión</h2>";
    print_r(sqlsrv_errors());
}
?>