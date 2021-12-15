<?php
    include_once ("controllers/controller.php");
    if(!empty($_GET)){
        if($_GET["accion"]=="cubo"){
            $control = new Controller();
            $control->cubo();
        }
        elseif($_GET["accion"]=="formulario"){
            $control = new Controller();
            $control->formulario();
        }
        elseif($_GET["accion"]=="variables"){
            $control = new Controller();
            $control->variables();
        }
        elseif($_GET["accion"]=="jquery"){
            $control = new Controller();
            $control->jQuery();
        }
        elseif($_GET["accion"]=="json"){
            $control = new Controller();
            $control->notacionJson();
        }
        elseif($_GET["accion"]=="mysql"){
            $control = new Controller();
            $control->consultaMySql();
        }else{
            $control = new Controller();
            $control->cubo();
        }

    }
    else{
        $control = new Controller();
        $control->cubo();
    }

   
    
?>