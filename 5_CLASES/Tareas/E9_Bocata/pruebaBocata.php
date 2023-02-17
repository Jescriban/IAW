<?php

require'./clases/Bocata.php';

//probamos los campos y metodos de clase
//con los valores por defecto
echo Bocata::listaDePrecios();
echo '<hr>';




//reajustamos los valores de la clase
Bocata::setPrecioPorIngrediente(0.35);
Bocata::setPrecioBase(1.50);
Bocata::setRecargoTamaño(0.50);
Bocata::setIngredienteOferta('pepinillos');
//mostramos la nueva lista de precios
echo Bocata::listaDePrecios();
echo '<hr>';

//probamos creando un objeto (Bocata)
$miBocata = new Bocata('JAIME', 2, ['queso','jamon','pepinillos','huevo frito']);
echo $miBocata->detalleBocata();
echo '<hr>';



//no tenemos tanto dinero!!
$miBocata->setIngredientes(['pepinillos']);
$miBocata->setTamaño(-10);
echo $miBocata->detalleBocata();
echo '<hr>';



