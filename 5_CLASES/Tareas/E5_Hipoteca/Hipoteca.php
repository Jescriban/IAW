<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Hipoteca
 *
 * @author usulocal
 */
class Hipoteca {

    //DEFINICION DE CONSTANTES
    const MENSAJE1 = "Los valores son informativos. El banco pasa!";
    const MENSAJE2 = "Datos calculados al día de hoy";

    // DEFINICION DE CAMPOS DE CLASE
    private static $maximoAnualidades = 30,
            $minimoAnualidades = 5,
            $tipoMinimo = 1,
            $tipoMaximo = 15;
    //DEFINICION DE CAMPOS DE OBJETOS
    private $capital,
            $tipoInteres,
            $anualidades;

    //CONSTRUCTOR DE OBJETO DE CLASE
    public function __construct($capital, $tipoInteres, $anualidades) {
        $this->setCapital($capital);
        $this->setTipoInteres($tipoInteres);
        $this->setAnualidades($anualidades);
    }

    //SETTERS Y GETTERS DE CAMPOS DE CLASE
    static function getMaximoAnualidades() {
        return self::$maximoAnualidades;
    }

    static function getMinimoAnualidades() {
        return self::$minimoAnualidades;
    }

    static function getTipoMinimo() {
        return self::$tipoMinimo;
    }

    static function getTipoMaximo() {
        return self::$tipoMaximo;
    }

    static function setMaximoAnualidades($maximoAnualidades): void {
        self::$maximoAnualidades = $maximoAnualidades;
    }

    static function setMinimoAnualidades($minimoAnualidades): void {
        self::$minimoAnualidades = $minimoAnualidades;
    }

    static function setTipoMinimo($tipoMinimo): void {
        self::$tipoMinimo = $tipoMinimo;
    }

    static function setTipoMaximo($tipoMaximo): void {
        self::$tipoMaximo = $tipoMaximo;
    }

    //SETTERS Y GETTERS DE CAMPOS DE OBJETO
    function getCapital() {
        return $this->capital;
    }

    function getTipoInteres() {
        return $this->tipoInteres;
    }

    function getAnualidades() {
        return $this->anualidades;
    }

    function setCapital($capital): void {
        if ($capital < 0){
            $this->capital = 0;
        } else {
            $this->capital = $capital;
        }
    }

    function setTipoInteres($tipoInteres): void {
        if ($tipoInteres < self::getTipoMinimo()){
            $this->tipoInteres = self::getTipoMaximo();
        } elseif ($tipoInteres > self::getTipoMaximo()){
            $this->tipoInteres = self::getTipoMaximo();
        } else {
            $this->tipoInteres = $tipoInteres;
        }
    }

    function setAnualidades($anualidades): void {
        if ($anualidades < self::getMinimoAnualidades()){
            $this->anualidades = self::getMaximoAnualidades();
        } elseif ($anualidades > self::getMaximoAnualidades()){
            $this->anualidades = self::getMaximoAnualidades();
        } else {
            $this->anualidades = $anualidades;
        }
    }

    //METODOS DE LA CLASE
    function getTipoInteresReal() {
        return ($this->getTipoInteres() / 100);
    }
    function getTipoInteresPorcentaje() {
        return $this->getTipoInteres() . "%";
    }
    function getCuotaAnualidad() {
        // C0 = CF * (i * (1+i)^t) /( (1+i)^t-1)
        $CF = $this->getCapital(); //Capital Finaciado
        $i = $this->getTipoInteresReal(); //interes real (ya dividido por 100)
        $t = $this->getAnualidades(); //anualidades que se quieren
        $bicho = pow(1 + $i, $t);
        $C0 = $CF * ($bicho * $i) / ($bicho - 1);
        return $C0;
    }

    function getTotalPagado() {
        return number_format(($this->getAnualidades() * $this->getCuotaAnualidad()), "2");
    }

    function getInteresTotal() {
        $sumaCapitalIntereses = $this->getCapital() + $this->getCuotaAnualidad();
        return number_format(($sumaCapitalIntereses / $this->getAnualidades()), "2");
    }

    function ficha() {
        $tabla = '<table border="1">';
        $tabla .= '<tr><td>CAPITAL FINANCIADO:</td><td>'. $this->getCapital() .'€</td></tr>';
        $tabla .= '<tr><td>TIPO INTERES:</td><td>'. $this->getTipoInteresPorcentaje() .'</td></tr>';
        $tabla .= '<tr><td>ANUALIDADES:</td><td>'. $this->getAnualidades() .'</td></tr>';
        $tabla .= '<tr><td>CUOTA ANUAL:</td><td>'. round($this->getCuotaAnualidad(),2) .'€</td></tr>';
        $tabla .= '<tr><td>TOTAL PAGADO:</td><td>'. $this->getTotalPagado() .'€</td></tr>';
        $tabla .= '<tr><td>INTERESES TOTALES:</td><td>'. $this->getInteresTotal() .'€</td></tr></table>';
        return $tabla;
    }

    function calculaTablaAmortizacion() {
        $capitalVivo = $this->getCapital();
        $tabla[] = ['AÑO', 'INTERES', 'AMORTIZ', 'C.VIVO'];
        $tabla[] = [0, 0, 0, $capitalVivo];
        for ($fila = 0; $fila < $this->getAnualidades(); $fila++){
            $intereses = $capitalVivo * $this->getTipoInteresReal();
            $amortizacion = $this->getCuotaAnualidad() - $intereses;
            $capitalVivo = $capitalVivo - $amortizacion;
            $tabla[] = [$fila+1, round($intereses,2), round($amortizacion,2), round($capitalVivo,2)];
        }
        return $tabla;
    }

    function tablaAmortizacion() {
        return self::pintarTabla($this->calculaTablaAmortizacion());
    }

    private static function pintarTabla($tablaEntrada) {
        $tablaHTML = "<table>";
        for ($f = 0; $f < count($tablaEntrada); $f++) {
            $tablaHTML = $tablaHTML . "<tr>";
            for ($c = 0; $c < count($tablaEntrada[$f]); $c++) {
                $tablaHTML = $tablaHTML . '<td style="border: 1px solid black">'
                        . $tablaEntrada[$f][$c] .
                        "</td>";
            }
            $tablaHTML = $tablaHTML . "</tr>";
        }
        $tablaHTML = $tablaHTML . "</table>";
        return $tablaHTML;
    }

}
