<?php

include './F1_relacionPaisesEU.php';
//recpogemos los datos
$pais = $_POST['pais']; //'España'
$capital = $_POST ['capital'];
//la buena
$capitalBuena = $EU[$pais];//$EU['España']

echo "probando $capital para $pais <br>";
//preguntamos
if ($capital == $capitalBuena) {
    echo "CORRESTA <br>";
} else {
    echo "la capital buena es $capitalBuena <br>";
}
echo "<a href='F1_juegoCapitales.php'>VOLVER</a>";