<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <?php
    include './F1_relacionPaisesEU.php';
    $paises = array_keys($EU);
    $capitales = array_values($EU);
    shuffle($paises);
    shuffle($capitales);
    ?>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="F1_comprobarCapital.php" method="POST">
            <fieldset>
                <legend>SELECCIONA PAIS</legend>
                <select name ="pais">
                    <!-- <option value=Alemania>Alemania</option>-->
                    <?php
                    foreach ($paises as $pais) {
                        echo "<option value='$pais'>$pais</option>";
                    }
                    ?>
                </select>
            </fieldset>
            <fieldset>
                <legend>SELECCIONA CAPITAL</legend>
                <select name ="capital">
                    <?php
                    foreach ($capitales as $capital) {
                        echo "<option value='$capital'>$capital</option>";
                    }
                    ?>
                </select>
            </fieldset> 
            <input type="submit" value="COMPROBAR">

        </form> 
    </body>
</html>
