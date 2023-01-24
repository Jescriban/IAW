<?php
var_dump($_COOKIE);
echo "<hr>";

if (!isset($_COOKIE["usuario"])) {
    echo "La cookie '" . "usuario" . "' no está!";
} else {
    echo "La Cookie '" . "usuario" . "' está <br>";
    echo "su valor es: " . $_COOKIE["usuario"];
}
?>
