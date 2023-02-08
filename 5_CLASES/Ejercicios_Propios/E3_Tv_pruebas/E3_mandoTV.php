<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="tv-info">
        <div id="television"></div>
        <div id="informacion">
        <?php
        require_once './clases/E3_Tv.php'; //la clase Tv
        //lo del sesion start... debe ser lo primero
        if (!isset($_SESSION)) {
            session_start(); //inicializa la variable $_SESSION
        }
        // vemos si venimos de E3_inicioTele.html,  para ello preguntamos
        //  por $_POST['mando'], si está es que estamos creando la tele
        // y por lo tanto creamos el objeto $miTele con los datos del formulario
        if (isset($_POST['mando'])) {
            //creamos la tele $miTele con valores fijos.
            $miTele = new Tv($_POST['marca'], $_POST['precio'],$_POST['pulgadas']);
        } else {
            //es que ha pulsado un boton y venimos de este mismo formulario 
            //y ya existía $miTele en la variable $_SESSION['tele']
            //recuperamos la variable $miTele de la $_SESSION['tele']
            $miTele = $_SESSION['tele'];
            //cogemos la "orden" de $_POST['boton']
            $orden = $_POST['boton'];
            //llamamos al método procesaOrden($orden)
            $miTele->procesaOrden($orden);
        }
        //mostramos la información técnica y el estado actual
        echo $miTele->informacionTecnica() . "<br/>";
        echo $miTele->estadoActual() . "<br/>";
        //y lo almacenamos a la variable $_SESSION['tele']
        $_SESSION['tele'] = $miTele;
        ?>
        </div>
        </div>
        <div id="mando">
        <!-- construimos el formulario para manejar la tele -->
        <form action="E3_mandoTV.php" method="POST">
            <?php require './E3_dibujaControles.php'; ?>
            <br>
            <input type="submit" formaction="E3_inicioTele.html" 
                   formmethod="POST" value="OTRA TELE">
        </form>
        </div>
    </body>
</html>
