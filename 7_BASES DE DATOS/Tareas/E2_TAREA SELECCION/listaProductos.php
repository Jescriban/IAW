<?php

$categoria = $_POST['categoria'];
//Nos conectamos a la base de datos
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
//Sacamos el id de la categoria
$pideId = "SELECT IdCategoria FROM categorias WHERE Nombre='".$categoria."'";
$resultadoId = $conexion->query($pideId);
$numeroId = $resultadoId->fetch();
//Sacamos el contenido de la consulta
$consulta = "SELECT * FROM productos WHERE Categoria = '".$numeroId['IdCategoria']."'";
$resultado = $conexion->query($consulta);
//Sacamos el proveedor
$pideProveedor = "SELECT * FROM proveedores;";
$resultadoProveedor = $conexion->query($pideProveedor);
while ($fila = $resultadoProveedor->fetch()){
    $listaProveedor[$fila['IdProveedor']] = $fila['Nombre'];
}
//Creamos la tabla
$tabla = '<table border="1"><tr><th>IdProducto</th><th>Nombre</th><th>Proveedor</th></tr>';
while ($fila = $resultado->fetch()){
    $tabla .='<tr><td>'.$fila['IdProducto'].'</td><td>'.$fila['Nombre']
            . '</td><td>'.$listaProveedor[$fila['Proveedor']].'</td></tr>';
}
$tabla .= '</table>';
echo $tabla;

