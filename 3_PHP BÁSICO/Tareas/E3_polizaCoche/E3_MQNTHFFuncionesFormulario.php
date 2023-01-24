<?php

function calculaTomador($precio, $año, $mujer) {
    if (date("Y") - $año < 10) {
        $precio = $precio * 2;
    }
    if ($mujer != "mujer"){
        $precio = $precio*0.9;
    }
    return $precio;
}
function calculaVehiculo($precio, $año, $electrico){
    if (date("Y") - $año > 10) {
        $precio = $precio * 2;
    }
    if ($electrico == "electrico"){
        $precio = $precio*0.7;
    }
    elseif ($electrico == "diesel"){
        $precio = $precio*1.3;
    }
    return $precio;
}
function calculaModalidad($precio, $modalidad){
    if ($modalidad == "intermedio"){
        $precio = $precio + 200;
    }
    elseif ($modalidad == "todoriesgo"){
        $precio = $precio*2;
    }
}
?>
<br/>
<button onclick="history.back()">Otro seguro</button>