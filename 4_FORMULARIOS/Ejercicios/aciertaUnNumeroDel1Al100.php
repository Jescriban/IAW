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
        session_start();
        //$_SESSION['numeroSecreto'] almacena el numero secreto
        // var_dump($_POST);
        //si no viene $_POST['numeroAprobar'] ( no está establecida) es que empieza el juego

        if (!isset($_SESSION['numeroSecreto'])) {
            $_SESSION['numeroSecreto'] = rand(1, 100);
        } else {
            if ($_POST['numeroAprobar'] < $_SESSION['numeroSecreto']) {
                echo "hacia arriba";
            } elseif ($_POST['numeroAprobar'] > $_SESSION['numeroSecreto']) {
                echo "hacia abajo";
            } else {
                echo "has acertado!!!!!!";
                session_destroy();
                $_SESSION['numeroSecreto'] = rand(1, 100);
            }
        }
        ?>

        <form action="aciertaUnNumeroDel1Al100.php" method="POST">
            NUMERO:<input type ="number" name="numeroAprobar"><!-- comment --> 
            <input type="submit" value ="PROBAR">
        </form>
    </body>
</html>
