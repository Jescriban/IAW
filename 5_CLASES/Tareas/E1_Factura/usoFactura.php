<?php

//Usamos la clase Factura
require './clases/Factura.php';

//podemos usar los campos y métodos de clase
echo "empresa: ".Factura::NOMBRE_EMPRESA."</br>";
//echo ivas...
echo "Iva entre ". Factura::getIvaMin()."% y ".
        Factura::getIvaMax()."%<br/>";
//modificamos el IVA
echo "modificamos el IVA MAXIMO Y MINIMO<br/>";
Factura::setIvaMax(21);
Factura::setIvaMin(6);

//mostramos el iva max y el iva min
echo 'iva maximo:'. Factura::getIvaMax();
echo '<br/>';
echo 'iva minimo:'. Factura::getIvaMin();

//creamos EL OBJETO$miFactura
$miFactura = new Factura(1200,"", 18, "001/2017");
//mostramos la factura
echo $miFactura->imprimeFactura();