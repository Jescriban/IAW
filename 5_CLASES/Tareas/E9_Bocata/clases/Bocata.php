<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of bocata
 *
 * @author usulocal
 */
class Bocata {

// CONSTANTES DE CLASE
    const TAMAÑOS = ['NORMAL', 'GRANDE', 'EXTRA'];

// CAMPOS DE CLASE
    private static $precioBase = 1,
            $precioPorIngrediente = 0.20,
            $recargoTamaño = 0.50,
            $ingredienteOferta = 'queso';

// METODOS PUBLICOS DE CLASE
    static function listaDePrecios() {
        $recargoGrande = self::getRecargoTamaño();
        $recargoExtra = (self::getRecargoTamaño() * 2);
        $listaPrecios = "<div><h2>LISTA DE PRECIOS</h2>";
        $listaPrecios .= "<p>Precio BASE: " . number_format(self::getPrecioBase(), "2") . "€</p>";
        $listaPrecios .= "<p>Precio INGREDIENTE: " . number_format(self::getPrecioPorIngrediente(), "2") . "€</p>";
        $listaPrecios .= "<p>TAMAÑO GRANDE: " . number_format($recargoGrande, "2") . "€</p>";
        $listaPrecios .= "<p>TAMAÑO EXTRA: " . $recargoExtra . "€</p>";
        $listaPrecios .= "<p>INGREDIENTE GRATIS: " . self::getIngredienteOferta() . "</p></div>";
        return $listaPrecios;
    }

// SETTERS Y GETTERS DE CAMPOS DE CLASE
    static function getPrecioBase() {
        return self::$precioBase;
    }

    static function getPrecioPorIngrediente() {
        return self::$precioPorIngrediente;
    }

    static function getRecargoTamaño() {
        return self::$recargoTamaño;
    }

    static function getIngredienteOferta() {
        return self::$ingredienteOferta;
    }

    static function setPrecioBase($precioBase): void {
        self::$precioBase = $precioBase;
    }

    static function setPrecioPorIngrediente($precioPorIngrediente): void {
        self::$precioPorIngrediente = $precioPorIngrediente;
    }

    static function setRecargoTamaño($recargoTamaño): void {
        self::$recargoTamaño = $recargoTamaño;
    }

    static function setIngredienteOferta($ingredienteOferta): void {
        self::$ingredienteOferta = $ingredienteOferta;
    }

// CAMPOS DE OBJETO
    private $nombre,
            $tamaño,
            $ingredientes;

    // CONSTRUCTOR DE LA CLASE
    public function __construct($nombre, $tamaño, $ingredientes) {
        $this->setNombre($nombre);
        $this->setTamaño($tamaño);
        $this->setIngredientes($ingredientes);
    }

// SETTERS Y GETTERS DE CAMPOS DE OBJETO
    function getNombre() {
        return $this->nombre;
    }

    function getTamaño() {
        return $this->tamaño;
    }

    function getIngredientes() {
        return $this->ingredientes;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setTamaño($tamaño): void {
        if ($tamaño == 0 OR $tamaño == 1 OR $tamaño == 2) {
            $this->tamaño = $tamaño;
        } else {
            $this->tamaño = 0;
        }
    }

    function setIngredientes($ingredientes): void {
        $this->ingredientes = $ingredientes;
    }

// METODO PUBLICOS DEL OBJETO
    public function getTamañoTexto() {
        return self::TAMAÑOS[$this->getTamaño()];
    }

    public function getNumeroIngredientes() {
        return array_count_values($this->getIngredientes());
    }

    public function getLLevaIngredienteDeOferta() {
        foreach ($this->getIngredientes() as $estaEnOferta) {
            if ($estaEnOferta == self::getIngredienteOferta()) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function getListaDeIngredientes() {
        return implode(",", $this->getIngredientes());
    }

    public function getRecargoPorIngredientes() {
        $recargoIngrediente = 0;
        foreach ($this->getIngredientes() as $compruebaIngrediente) {
            if ($compruebaIngrediente != self::getIngredienteOferta()) {
                $recargoIngrediente = ($recargoIngrediente + self::getPrecioPorIngrediente());
            }
        }
            return number_format($recargoIngrediente, "2");
    }

    public function getRecargoPorTamaño() {
        $multiplicadorTamaño = $this->getTamaño();
        return (self::getRecargoTamaño() * $multiplicadorTamaño);
    }

    public function calculaPrecio() {
        $precioFinal = (self::getPrecioBase() + $this->getRecargoPorIngredientes() + $this->getRecargoPorTamaño());
        return number_format($precioFinal, "2");
    }

    public function detalleBocata() {
        $detalleBocata = "<div><h2>Bocata para " . $this->getNombre() . "</h2>";
        $detalleBocata .= "<p>de " . $this->getListaDeIngredientes() . "</p>";
        $detalleBocata .= "<p>Precio Base:" . self::getPrecioBase() . "€</p>";
        $detalleBocata .= "<p>Por ingredientes: " . $this->getRecargoPorIngredientes() . "€</p>";
        $detalleBocata .= "<p>Tamaño: " . $this->getTamañoTexto() ." ". $this->getRecargoPorTamaño() . "€</p>";
        $detalleBocata .= "<p>TOTAL PRECIO: " . $this->calculaPrecio() . "€</p></div>";
        return $detalleBocata;
    }

}
