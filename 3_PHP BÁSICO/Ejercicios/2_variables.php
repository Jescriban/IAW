<?php

//mayusculas y minúsculas
$var = 'Roberto';
$Var = 'Juan';
echo "$var, $Var";      // imprime "Roberto, Juan"

//descomentar y ver resultado
//$4site = 'aun no';      // inválido; comienza con un número

$_4site = 'aun no';     // válido; comienza con un carácter de subrayado
$täyte = 'mansikka';    // válido; 'ä' es ASCII (Extendido) 228
echo '<br>------------------------<br>'; 
//camel case
$horaCierreNormal ="10:00pm";
$precioHoraExtra = "80.67peor";//"x80.67peor";
$horasCurradas=3;
echo "<br>llevo curradas $horasCurradas y me debes ". 
        $precioHoraExtra*$horasCurradas;

/* ASIGNACIONES POR VALOR Y POR REFERENCIA */
$miEdad = 58;
//tu tienes 5 menos que yo
$tuEdad = $miEdad - 5;
echo "<br>";
echo "1.yo tengo $miEdad y tu tienes $tuEdad <br>";

//Juanito tiene como mucho mi edad (me voy a asegurar &)
$laEdadDeJuanitoPerez = &$miEdad;

echo "2.yo tengo $miEdad y tu tienes $tuEdad y el tiene $laEdadDeJuanitoPerez <br>";

//me vi a quitá un año, y así soy más joven!!!
$miEdad=57;
echo "3.yo tengo $miEdad y tu tienes $tuEdad y el tiene $laEdadDeJuanitoPerez <br>";

//esto no puede ser, le voy a poner su edad por valor y así no me iguala!!
$laEdadDeJuanitoPerez=58;
echo "4.yo tengo $miEdad y tu tienes $tuEdad y el tiene $laEdadDeJuanitoPerez <br>";

//no puede ser!! estamos ligados?
$miEdad="cincuenta y siete";
$laEdadDeJuanitoPerez=58;
echo "5.yo tengo $miEdad y tu tienes $tuEdad y el tiene $laEdadDeJuanitoPerez <br>";
//ni así!! el último es el que manda!!, los dos apuntamos a la misma memoria!!
//fucking References!!
echo '<br>------------------------<br>'; 

/* VARIABLES DE VARIABLES 
el nombre de la variable puede cambiar!!
 */
$nombre="Jaime";
$apellido="Fernandez";

$texto='nombre';
echo "su $texto es ${$texto}";
echo '<br>------------------------<br>'; 

$texto='apellido';
echo "su $texto es ${$texto}";
echo '<br>------------------------<br>'; 

?>
