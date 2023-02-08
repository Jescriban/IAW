<?php

//mysqli como funciones...
$servidor = "localhost";
$usuario = "alumno";
$contraseña = "alumno";
$baseDeDatos = 'bendetto';

// Crea la variable connexion (ver msqli_connect)
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);

//establecemos la codificación del cliente según nos interesa
mysqli_set_charset($conexion, "UTF8");

// comprueba que hay conexion (si $conexion es false)
if (mysqli_connect_error()) {
    //matamos el proceso con die y un mensaje con el error
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    //tambien se puede poner los mensajes y un un exit
}
echo "CONECTADO</br>";
echo "Información del host: " . mysqli_get_host_info($conexion) . "</br>";
//hacemos una consulta
$consulta = 'SELECT * FROM clientes LIMIT 10;';
echo "</br>la consulta es '$consulta'<br/>";
//$resultado apunta al "cursor" con los datos
$resultado = mysqli_query($conexion, $consulta);
//veamos si ha habido exito.
//var_dump($resultado);

if ($resultado == FALSE) {
    echo 'La consulta ha fallado!</br>';
    echo 'Error: ' . mysqli_error($conexion);
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
while ($tupla = mysqli_fetch_assoc($resultado)) {
    echo "<li> " . $tupla['IdCliente'] . ' / ' .
            $tupla['Nombre']."</li>";
}
echo "</ul><br>";

//cerramos la $conexion
mysqli_close($conexion);

echo "<hr/>";

