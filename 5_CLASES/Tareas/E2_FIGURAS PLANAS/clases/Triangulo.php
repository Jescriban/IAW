<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Triangulo
 *
 * @author usulocal
 */
class Triangulo {
    //propiedades privadas
    private $base, $altura;
    
    //constructor
    function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    //setters y getters
    public function getBase() {
        return $this->base;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setBase($base): void {
        $this->base = $base;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }
    //metodo que devuelve el area
    function getArea(){
        return $this->getBase() * $this->getAltura() / 2;
    }
    function getPerimetro() {
        $cateto = $this->getBase() / 2;
        $hipotenusa = sqrt(pow($this->getAltura(),2) + pow($cateto, 2));
        return 2 * $hipotenusa + $this->getBase();
    }
    function ficha() {
        $texto = "Base: " . $this->getBase() . "<br>" .
                "Altura: " . $this->getAltura() . "<br>" .
                "Area: " . $this->getArea() . "<br>" .
                "Perimetro: " . $this->getPerimetro() . "<br>";
        echo $texto;
    }

}
