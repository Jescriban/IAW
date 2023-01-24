/*<?php
echo "COSAS DE SINTAXIS"; #un poupurri de cosillas básicas
echo "<br>Sobre sintaxis básica de PHP 1";
?>
<br>
esto sale porque es html...
<hr>
<?= "Sobre sintaxis básica de PHP 2"; ?>
<?php echo " <br> Sobre sintaxis básica de PHP 2"; ?>

<br>
<?php
# print tb funciona, y para "escapar" caractereds se usa \
# el . sirve para concatenar cadenas
print "<b>para escapar caracteres se \"hace así en el dia: \"<br></b>"
        . date('l jS \of F Y h:i:s A')."<br>";
echo "<br>"; //mete un salto de linea
echo "(ahora tengo que poner un texto con una ') BAR O'hara ".'<br>';
echo '(ahora tengo que poner un texto con una \') "BAR O\'hara" ';
echo '<br>------------------------<br>';

/* mezcla alternativa de HTML Y PHP
 * aquí se mezclan los dos para generar un HTML
 * NO SE ACONSEJA, POR PIEDAD!!
 */

if (3 > 4) {
    ?>
    tres es menor que cuatro 
    <br>
    Vamos, de siempre
    <h5> seguro </h5>
    <?php
} else {
    ?>
    es imposible que esto salga, nunca tres mayor o igual que 4
<?php }
?>

<!-- este es un comentario en HTML, 
porque estoy fuera de las estiquetas de PHP!-->
*/
<?php
#las instrucciones se separan por ;
echo '<br>------------------------<br>';
$edad = 21;
var_dump($edad);
echo "<br>";
$nombre = 'Pepe';
echo "Hola $nombre, tienes $edad años";
echo '<br>------------------------<br>';
echo 'Hola $nombre, tienes $edad años';
$conCorchetes = "]]]]][[[[{{{";

