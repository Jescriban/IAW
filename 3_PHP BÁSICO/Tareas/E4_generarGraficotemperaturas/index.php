<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Temperaturas mensuales</title>
    </head>
    <body>
        <p style="font-family: monospace; font-size: 20px">
            Gráficos temperaturas mensuales</p>
        <?php
        //Partiendo de la variable $temperaturas (array de 12 elementos con 
        //los nombres de los meses, como clave y la temperatura media máxima
        // de cada mes, como valor):
        //Se pide: Generar un gráfico como se muestra a continuación, para el 
        //cuadrito se usa la imagen barraTemp.png (suministrada)
        //Declaramos el array
        $temperaturas = array("Enero" => '12', "Febrero" => '13',
            "Marzo" => '17', "Abril" => '19', "Mayo" => '25', "Junio" => '31',
            "Julio" => '34', "Agosto" => '34', "Septiembre" => '28',
            "Octubre" => '23', "Noviembre" => '16', "Diciembre" => '13');
        //Recorremos todos los meses con un bucle foreach
        foreach ($temperaturas as $mes => $valor) {
            //Aquí creamos el div de cada mes
            echo '<div style="font-family: monospace; font-size: 40px">'
            //Esta funcion nos permite rellenar de manera variable con el
            //elemento '-' máximo 15 veces hasta alcanzar el string que se
            //ponga a continuación. En nuestro caso '>'
            . str_pad($mes, 15, '-') . '>';
            //Con este bucle insertamos la imagen tantas veces como valor
            // de temperatura tenga el mes
            for ($contador = 0; $contador < $valor; $contador++) {
                echo '<img src="./imagenes/barraTemp.PNG" style="border: '
                . '1px solid black"/>';
            }
            //Separamos un poco la cifra y acabamos de cerrar el div
            echo '&nbsp' . $valor . 'ºC </div>';
        }
        ?>
        <p>José Escribano Rodriguez</p>
    </body>
</html>
