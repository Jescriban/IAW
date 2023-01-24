<?php

// se implementa la clase Trapecio Isósceles

class Trapecio {

    //propiedades privadas
    private $baseMayor, $baseMenor, $Altura;

    //constructor
    function __construct($baseMayor, $baseMenor, $Altura) {
        $this->baseMayor = $baseMayor;
        $this->baseMenor = $baseMenor;
        $this->Altura = $Altura;
    }

//setter y getter    
    function getBaseMayor() {
        return $this->baseMayor;
    }

    function getBaseMenor() {
        return $this->baseMenor;
    }

    function getAltura() {
        return $this->Altura;
    }

    function setBaseMayor($baseMayor) {
        //comprobamos que el valor es numerico!! y >=0, si no 0
        if (is_numeric($baseMayor) and $baseMayor >= 0) {
            $this->baseMayor = $baseMayor;
        } else {
            $this->baseMayor = 0;
        }
    }

    function setBaseMenor($baseMenor) {
        //comprobamos que el valor es numerico!! y >=0, si no 0
        if (is_numeric($baseMenor) and $baseMenor >= 0) {
            $this->baseMenor = $baseMenor;
        } else {
            $this->baseMenor = 0;
        }
    }

    function setAltura($Altura) {
        //comprobamos que el valor es numerico!! y >=0, si no 0
        if (is_numeric($Altura) and $Altura >= 0) {
            $this->Altura = $Altura;
        } else {
            $this->Altura = 0;
        }
    }

//metodo que devuelve el area
    function getArea() {
        return ($this->baseMayor + $this->getBaseMenor()) / 2 * $this->getAltura();
    }

//metodo que devuelve el perímetro
    function getPerimetro() {
        //usamos dos variables auxiliares para calcular el perímetro
        $cateto = ($this->getBaseMayor() - $this->getBaseMenor()) / 2;
        $hipotenusa = sqrt($this->getAltura() * $this->getAltura() +
                $cateto * $cateto);
        return $this->getBaseMayor() + $this->getBaseMenor() + 2 * $hipotenusa;
    }

    //metodo que devuelve una cadena con la ficha html del Trapecio
    function ficha() {
        $texto = "BASE MAYOR: " . $this->getBaseMayor() . "<br>" .
                "base menor: " . $this->getBaseMenor() . "<br>" .
                "Altura: " . $this->getAltura() . "<br>" .
                "AREA: " . $this->getArea() . "<br>" .
                "PERIMETRO: " . $this->getPerimetro() . "<br>";
        return $texto;
    }

}
