<?php
include './F1_relacionPaisesEU.php';
$pais8 = $_POST["pais"];
$capital8 = $_POST["capital"];

$paises8 = array_keys($EU);
$capitales8 = array_values($EU);

echo "Probando " . $capital8 . " para " . $pais8 . "<br/>";

foreach ($EU as $key => $value) {
    if ($value == $capital8 and $key == $pais8) {
        echo "CORRESTA!!";
    } 
    else {
        echo "la capital correcta es " . $EU[$pais8] . "<br/>";
    }
}
?>
<button onclick="history.back()">VOLVER</button>
