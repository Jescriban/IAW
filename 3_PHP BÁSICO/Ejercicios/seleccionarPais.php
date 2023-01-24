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
        include "./codigosPaises.php";
        ?>
        <select name="seleccionaPais" id="SP">
            <!-- ES-España -->
            <?php
            foreach ($codigoPaises as $codigo => $nombre) {
                //Generamos el option
                echo "<option value='$codigo'>$codigo - $nombre </option>";
            }
            ?>
        </select>
    </body>
</html>
