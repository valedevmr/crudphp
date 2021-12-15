<?php
include_once("models/Cubo.php");
class Controller {

    public function formulario(){

       
        include_once("views/formulario.php");

    }
    public function variables(){

        include_once("views/variables.php");
    }
    public function jQuery(){

        include_once("views/jQuery.php");

    }
    public function notacionJson(){

        include_once("views/NotacionJSON.php");
    }
    public function consultaMySql(){
        include_once("views/ConsultasMySql.php");
    }
    public function cubo(){

       
        include_once("views/Cubo.php");
    }
    public  function AreaCuboSttic($parametro){
       
       return Cubo::areaCubo($parametro);
    }
    public  function volumen($parametro){
        
        $cubo = new Cubo();
        return $cubo->volumen($parametro);

    }
    public function areaCuboNoEstatic($parametro){
        $cubo = new Cubo();
        return $cubo->areaCuboNo($parametro);

    }



}

?>