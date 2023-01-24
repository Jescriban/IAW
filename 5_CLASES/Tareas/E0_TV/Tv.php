<?php

/**
 * Description of Tv
 * aqui va la descripción de la clase Tv... todo ,lo extensa que uno quiera
 * @author jaime
 */
class Tv {

    // <editor-fold defaultstate="collapsed" desc="propiedades (atributos o campos) privadas">
    //propiedades o campos de la clase Tv
    //se han declarado privadas, sólo se tiene acceso dentro de la clase.
    private $marca, //contendrá la marca, una cadena 
            $onOff, //TRUE (encendida) o FALSE (apagada)
            $canal, //número entero con el canal en el que está
            $volumen, //número entero con el valor del volumen actual
            $pulgadas, //número entero con las pulgadas de la tele
            $consumo, //número entero con el consumo de la tele
            $precio; //número float con el precio de la tele

    // </editor-fold>
    
    //constructor
    public function __construct($marcaDeLaTele, $precioPagado, $pulgadas) {
        $this->marca = $marcaDeLaTele;
        $this->precio = $precioPagado;
        $this->pulgadas = $pulgadas;
        //damos valor al resto de las propiedades
        $this->canal = 1;
        $this->consumo = 250;
        $this->volumen = 10;
        $this->onOff = FALSE;
    }

    // <editor-fold defaultstate="collapsed" desc="getters">
    public function getMarca() {
        return $this->marca;
    }

    public function getOnOff() {
        return $this->onOff;
    }

    public function getCanal() {
        return $this->canal;
    }

    public function getVolumen() {
        return $this->volumen;
    }

    public function getPulgadas() {
        return $this->pulgadas;
    }

    public function getConsumo() {
        return $this->consumo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    // </editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="setters">

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setPulgadas($pulgadas) {
        $this->pulgadas = $pulgadas;
    }

    public function setConsumo($consumo) {
        $this->consumo = $consumo;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

// </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="métodos públicos">
    /**
     * establece a FALSE la propiedad onOff
     */
    public function apagar() {
        $this->onOff = FALSE;
    }

    //establece a TRUE la propiedad onOff
    public function encender() {
        $this->onOff = TRUE;
    }

    public function subirVolumen() {
        
    }

    public function bajarVolumen() {
        
    }

    public function subirCanal() {
        
    }

    public function bajarCanal() {
        
    }

    /**
     * Establece a $valorCanal la propiedad $canal
     * @param entero $valorCanal indica el número de canal a poner
     */
    public function ponerCanal($valorCanal) {
        
    }

    /**
     * devuelve un mensaje con el estado actual de volumen y canal, 
     * o de "apagada" si no está encendida
     * @return string
     */
    public function estadoActual() {
        if ($this->onOff) {
            return "canal: $this->canal volumen: $this->volumen";
        } else {
            return "apagada";
        }
    }

    //devuelve los datos técnicos del objeto Tv creado
    public function informacionTecnica() {
        return "Marca: $this->marca, PVP: $this->precio"
                . ", pulgadas: $this->pulgadas";
    }

// </editor-fold>
}
