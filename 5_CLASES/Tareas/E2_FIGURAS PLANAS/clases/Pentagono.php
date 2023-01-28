<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pentagono
 *
 * @author usulocal
 */
class Pentagono {
    private $lado, $apotema;
    function __construct($lado, $apotema) {
        $this->lado = $lado;
        $this->apotema = $apotema;
    }
    function getLado() {
        return $this->lado;
    }

    function getApotema() {
        return $this->apotema;
    }

    function setLado($lado): void {
        $this->lado = $lado;
    }

    function setApotema($apotema): void {
        $this->apotema = $apotema;
    }
    function getArea(){
        return $this->getPerimetro()* $this->apotema / 2;
    }
    function getPerimetro(){
        return $this->getLado()*5;
    }
    function ficha(){
        $texto = "Lado: " . $this->getLado() . "<br>" .
                "Apotema: " . $this->getApotema() . "<br>" .
                "Area: " . $this->getArea() . "<br>" .
                "Perimetro: " . $this->getPerimetro() . "<br>";
        return $texto;
    }


}
