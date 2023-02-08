<?php

//data source name (nombre del origen de datos)
$dsn = "mysql:host=localhost;dbname=bendetto"; //;charset=utf8
$usuario = "alumno";
$contraseña = "alumno";
// intentamos crear un objeto  do conexion, con try, si no se lanza una 
//PDOException
try {
    //new PDO(<parametros>)
    $conexion = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    //mostramos el mensaje de error
    echo 'Falló la conexión: ' . $e->getMessage();
    exit();
}

//var_dump($conexion);
echo "CONECTADO";
echo "<hr>";

//veamos un ejmplo de atributos de la $conexion, (con constantes de clase)
echo "Información del host: " .
 $conexion->getAttribute(PDO::ATTR_SERVER_INFO) . "</br>";
echo "Información del DRIVER: " .
 $conexion->getAttribute(PDO::ATTR_DRIVER_NAME) . "</br>";

//hacemos una consulta
$consulta = 'SELECT * FROM clientes LIMIT 10;';
echo "</br>la consulta es '$consulta'</br></br>";
//$resultado es un objeto de la clase PDOStatement 
$resultado = $conexion->query($consulta);
//veamos si ha habido exito.
//var_dump($resultado);

if ($resultado == FALSE) {
    //mostramos el array que devuelve el método errorInfo()
    print_r($conexion->errorInfo());
    exit('</br>La consulta ha fallado!</br>'); //nos vamos 
}

//vamos a mostrar el resultado recorriendo con el método fetch
//usamos la función mysqli_fetch_assoc, que devuelve 
//un array asociativo para cada tupla
//$unaTupla = $resultado->fetch(); (por defecto un array asociativo)
//print_r($unaTupla);

//vamos a uasr una lista 
echo 'Listado de clientes: <ul>';

//recorremos las tuplas con un while (haya tuplas!!)
while ($tupla = $resultado->fetch()) {
    echo "<li> " . $tupla['IdCliente'] . ' / ' .
    $tupla['Nombre'] . "</li>";
}
echo "</ul><br>";

//cerramos la $conexion
$conexion = null;

echo "<hr>";

