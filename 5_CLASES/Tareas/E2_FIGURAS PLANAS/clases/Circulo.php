<?php
/* Se implementa la clase Circulo */

class Circulo {

// propiedades privadas
    private $radio;

// constructor
    function __construct($radioInicial) {
        //  $this->radio = $radioInicial; mejor al set!!
        $this->setRadio($radioInicial);
    }

//setter y getter

    function setRadio($valorRadio) {
        //comprobamos que el valor es numerico!!, si no 0
        if (is_numeric($valorRadio) and $valorRadio >= 0) {
            $this->radio = $valorRadio;
        } else {
            $this->radio = 0;
        }
    }

    function getRadio() {
        return $this->radio;
    }

//metodo que devuelve el area
    function getArea() {
        return pi() * $this->radio * $this->radio;
    }

//metodo que devuelve el perímetro
    function getPerimetro() {
        return pi() * $this->radio * 2;
    }

//metodo que devuelve una cadena con la ficha html del círculo
    function ficha() {
        $texto = "RADIO: " . $this->getRadio() . "<br>" .
                "AREA: " . $this->getArea() . "<br>" .
                "PERIMETRO: " . $this->getPerimetro() . "<br>";
        return $texto;
    }
}
?>