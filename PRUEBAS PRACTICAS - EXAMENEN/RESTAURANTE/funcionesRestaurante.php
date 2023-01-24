<?php
//funcion que calcula la media del precio de una lista de platos
function mediaPrecios($array) {
            //RESETEAMOS LOS CONTADORES A 0
            $precioGuardado = 0;
            $cuentaMedia = 0;
            //
            foreach ($array as $nombreComida => $precioComida) {
                //EL VALOR DE LA POSICION SE ALMACENA EN LA VARIABLE
                //DE MANERA INCREMENTAL
                $precioGuardado += $precioComida;
                //ESTE CONTADOR ES PARA LUEGO CALCULAR LA MEDIA
                $cuentaMedia++;
            }
            //AHORA CALCULAMOS LA MEDIA CON LOS VALORES QUE SE HAN IDO
            //ALMACENANDO. eEL CONTADOR SE CORRIGE CON UN +1
            $media = $precioGuardado / ($cuentaMedia + 1);
            //DEVUELVE EL VALOR MEDIO
            Return $media;
        }
        
        