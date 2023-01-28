<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Cuadrado
 *
 * @author usulocal
 */
class Cuadrado {
    private $lado;
    
    function __construct($lado){
        $this->lado = $lado;
    }


    function getLado() {
        return $this->lado;
    }

    function setLado($lado) {
        $this->lado = $lado;
    }
    function getArea(){
        return pow($this->getLado(), 2);
    }
    function getPerimetro(){
        return $this->getLado() * 4;
    }
    function ficha(){
        $texto = "Lado: " . $this->getLado() . "<br>" .
                "Area: " . $this->getArea() . "<br>" .
                "Perimetro: " . $this->getPerimetro() . "<br>";
        return $texto;
    }


}
