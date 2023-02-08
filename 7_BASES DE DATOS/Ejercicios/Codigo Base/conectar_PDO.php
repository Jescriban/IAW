<?php

//phpinfo();
/* Ejercicio de conexión a una BD MySQL o SQL SERVER
  EL servidor debe estar en funcionamiento, y para hacer la prueba se debe tener
  la base de datos y la tabla en ambos servidores!!!
 */
try {
    //sacamos un número al azar entre 0 y 3,
    //que sale 0 o 2 conectamos con  SQL SERVER, 1 o 3 conectamos con MySQL  
    //
    $dado = random_int(2, 3);
    switch ($dado) {
        case 0:
            //conectaremos con SQL SERVER local usando PDO_SQLSRV driver
            //https://www.php.net/manual/es/ref.pdo-sqlsrv.connection.php
            $dsn = "sqlsrv:Server=DPTO-HP-PRO-W10\SQL_HP_DPTO;Database=test";
            $conexion = new PDO($dsn, "sa", "MARZ0K");
            break;

        case 1:
            //conectaremos con MySQL local usando PDO_Mysql driver
            // https://www.php.net/manual/es/ref.pdo-mysql.connection.php
            $dsn = "mysql:host=localhost;dbname=test";
            $conexion = new PDO($dsn, "jaime", "MARZ0K");
            break;
        case 2:
            //conectaremos con SQL SERVER (remoto en linux via PROXMOX)
            // usando PDO_SQLSRV driver
            $dsn = "sqlsrv:Server=192.168.5.11,1433;Database=test";
            $conexion = new PDO($dsn, "alumno", "");
            break;
        case 3:
            //conectaremos con MySQL (remoto en linux  via PROXMOX)
            //usando PDO_Mysql driver
            $dsn = "mysql:host=192.168.5.11:3306;dbname=test;charset=utf8";
            $conexion = new PDO($dsn, "alumno", "alumno");
            break;
    }
} catch (PDOException $e) {
    die("Error en la conexion: " . $e->getMessage() . "<br/>");
}

//activamos para que los errores en las query lancen una exception
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//mostramos información de $conexion
echo "servidor: " . $conexion->getAttribute(pdo::ATTR_DRIVER_NAME) . "<br>";
var_dump($conexion->getAttribute(pdo::ATTR_SERVER_INFO));
echo '<br>' . $conexion->getAttribute(pdo::ATTR_SERVER_VERSION) . "<br>";

// almacenamos la consulta en una variable
$consulta = "SELECT * FROM cliente";

//lanzamos la consulta y la recogemos en $resultado
//https://www.php.net/manual/es/pdo.query.php
$resultado = $conexion->query($consulta);

//si no funciona la consulta, notificamos y nos vamos
if (!$resultado) {
    echo 'La sentencia ha fallado.<br>';
    die("Error : " . $conexion->errorInfo()[2]);
}

//$resultado es un objeto de la clase PDOStatement
//https://www.php.net/manual/es/class.pdostatement.php
// recorriendo $resultado (fetch) devuelve array asociativo....
echo "Nuestros clientes son: <br> <ul> ";
while ($tupla = $resultado->fetch()) {
    echo "<li> " . $tupla['nombre'] .
    " con dni " . $tupla['dni'] . " </li>";
}
echo "</ul>\n";

// liberamos $resultado y cerramos la conexion
$resultado->closeCursor();
$conexion = null;
?>