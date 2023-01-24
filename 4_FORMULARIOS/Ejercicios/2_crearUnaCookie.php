
<?php
$nombreDeLaCookie = "fecha";
$valor = date('w');
setcookie($nombreDeLaCookie, $valor, time() + 30, "/");
?>
