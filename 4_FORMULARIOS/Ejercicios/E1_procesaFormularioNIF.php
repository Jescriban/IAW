<?php
//Incluimos las funciones del NIF
include './E1_FuncionesNIF.php';
//Recogemos los datos del formulario
//var_dump ($_POST);
$nombre = $_POST ["nombre"];
$nif = $_POST ["nif"];
echo "El nif de $nombre está ";

if (verificadorNIF($nif)) {
    echo 'bien';
}
else {
    echo 'mal';
}


