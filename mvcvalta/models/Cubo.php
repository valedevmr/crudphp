<?php
include_once("FiguraGeometrica.php");
 class Cubo extends FiguraGeometrica{

    
    public static function areaCubo($parametro){
        return $parametro*$parametro;
    }
    public function volumen($lade){
        return ($lade *2)*$lade;
    }
    public function  areaCuboNo($parametro){
        return $parametro*$parametro;
    }
    
 }