<?php

/**
 * Description of Tv
 * aqui va la descripción de la clase Tv... todo ,o extensa que uno quiera
 * @author jaime
 */
class Tv_2 {

    // <editor-fold defaultstate="collapsed" desc="propiedades privadas">
    //propiedades o campos de la clase Tv
    //se han declarado privadas, sólo se tiene acceso dentro de la clase.
    private $marca, //contendrá la marca, una cadena 
            $onOff, //TRUE (encendida) o FALSE (apagada)
            $canal, //número entero con el canal en el que está
            $volumen, //número entero con el valor del volumen actual
            $pulgadas,//número entero con las pulgadas de la tele
            $consumo,//número entero con el consumo de la tele
            $precio;//número float con el precio de la tele

    // </editor-fold>

 
    public function apagar(){}
    public function encender(){}
    public function subirVolumen() {}
    public function bajarVolumen() {}
    public function subirCanal() {}
    public function bajarCanal() {}
    public function ponerCanal($valorCanal){}
    public function estadoActual(){}
    public function informacionTecnica(){}
}
