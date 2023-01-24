<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>

        <?php
        //IMPORTANTE.... QUÉ ES ESTO!
        var_dump($_SERVER);
        
        echo "¡Hola, soy un script de PHP!<br>";
        echo "---------------------------<br>";
        echo $_SERVER['HTTP_USER_AGENT']."<br>";
        echo "---------------------------<br>";
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE) {
        /*    echo 'Está usando Microsoft Edge.<br />';
         * 
         */
         echo 'Está usando Fire Fox.<br />';   
        }
        ?>
    </body>
</html>
