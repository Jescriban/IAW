<?php

//cuantas expresiones hay aquí 1, 6, 18 ...?
$estado = "";
        $estado = $estado . "LA PALABRA: " . $this->muestraResultado() . '<br>';
        $estado = $estado . "LETRAS PROBADAS: " . $this->getLetrasProbadas() . '<br>';
        $estado = $estado . "INTENTOS:" . $this->intentos() . '<br>';
        $estado = $estado . "FALLOS:" . $this->getFallos() . '<br>';
        
// rara...
        //$primero ? $segundo : $tercero
        echo ($alto > $ancho ? "normal" : "gordo");
        