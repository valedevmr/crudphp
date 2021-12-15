<?php


abstract class FiguraGeometrica{

    const Nombre = 'Cubo';
    private $lado;
    abstract static function areaCubo($param);
    abstract public function volumen($param);
    abstract public function areaCuboNo($param);
}