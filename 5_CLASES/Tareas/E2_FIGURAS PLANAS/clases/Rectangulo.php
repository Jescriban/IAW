<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Rectangulo
 *
 * @author usulocal
 */
class Rectangulo {
    private $base, $altura;
    
    function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    function getBase() {
        return $this->base;
    }

    function getAltura() {
        return $this->altura;
    }

    function setBase($base): void {
        $this->base = $base;
    }

    function setAltura($altura): void {
        $this->altura = $altura;
    }
    function getArea (){
        return $this->getBase() * $this->getAltura();
    }
    function getPerimetro(){
        return $this->getBase()*2 + $this->getAltura()*2;
    }
    function ficha(){
        $texto = "Base: " . $this->getBase() . "<br>" .
                "Altura: " . $this->getAltura() . "<br>" .
                "Area: " . $this->getArea() . "<br>" .
                "Perimetro: " . $this->getPerimetro() . "<br>";
        return $texto;
    }

}
