<?php
//mysqli como funciones...
$servidor = "localhost";
$usuario = "alumno";
$contraseña = "alumno";
$baseDeDatos = 'bendetto';

// creamos la conexion creando un onjeto
$conexion = new mysqli($servidor, $usuario, $contraseña, $baseDeDatos);

// comprueba que hay conexion (preguntamos por connect_error)
if ($conexion->connect_error) {
    die('Error de Conexión (' . $conexion->connect_errno . ') '
            . $conexion->connect_error);
}

//var_dump($conexion);

//establecemos la codificación del cliente según nos interesa
$conexion->set_charset("UTF8");
//var_dump($conexion);
echo "CONECTADO</br>";
echo "Información del host: " . $conexion->get_server_info() . "</br>";

//hacemos una consulta
$consulta = 'SELECT * FROM clientes LIMIT 10;';
echo "</br>la consulta es '$consulta'<br/>";
//$resultado apunta al "cursor" con los datos
$resultado = $conexion->query($consulta);
//veamos si ha habido exito.
//var_dump($resultado);

if ($resultado == FALSE) {
    echo 'La consulta ha fallado!</br>';
    echo 'Error: ' . $conexion->error;
    exit; //nos vamos 
}

//vamos a mostrar el resultado recorriendo con fetch
//usamos la función mysqli_fetch_assoc, que devuelve 
//un array asociativo para cada tupla
//$unaTupla = mysqli_fetch_assoc($resultado);
//print_r($unaTupla);
//vamos a uasr una lista 
echo 'Listado de clientes: <ul>';

//recorremos las tuplas con un while (haya tuplas!!)
while ($tupla = $resultado->fetch_assoc()) {
    echo "<li> " . $tupla['IdCliente'] . ' / ' .
    $tupla['Nombre'] . "</li>";
}
echo "</ul><br>";

//cerramos la $conexion
$conexion->close();

echo "<hr/>";

/*

//mysqli con objetos (hace falta indicar la base de datos)
$conexion = new mysqli($servidor, $usuario, $contraseña, $baseDeDatos);

try {
  $conn = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contraseña);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 * 
 */