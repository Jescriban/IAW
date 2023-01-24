<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $array = explode("h", "jflasdn alals h hafhda hafh fnslkhf ksjdfh khf khff");
        var_dump($array);
        //hacemos un for para listar el array $array
        for ($indice = 0; $indice < count($array); $indice++) {
            echo "<br> elemento $indice vale ---> $array[$indice] <----";
        }
        //lo convertimos a cadena mediante la funcion inversa del explode
        $cadena = implode("@", $array);
        echo "<br>---> $cadena<-----";
        ?>
    </body>
</html>
