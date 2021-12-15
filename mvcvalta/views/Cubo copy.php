<h3 class="container text-center mt-5">Área y volumen de Cubo </h3>



<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-6 ">
            <div class="card text-center">
                <div class="card-header color-per">
                    Área con metodo no estático
                </div>
                <div class="card-body">

                </div>
                <form class="formularioans" method="post" action="">
                    <div class="row justify-content-center">
                        <div class="mb-3 col-8">
                            <label for="lado" class="form-label">Ingrese lado de Cubo</label>
                            <input type="text" class="form-control" id="lado" aria-describedby="emailHelp" name="lado1" require>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular área</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-6 ">
            <div class="card text-center">
                <div class="card-header color-per">
                    Volumen de cubo
                </div>
                <div class="card-body">

                </div>
                <form class="formularioans" method="post" action="">
                    <div class="row justify-content-center">
                        <div class="mb-3 col-8">
                            <label for="lado" class="form-label">Ingrese lado de Cubo</label>
                            <input type="text" class="form-control" id="lado" aria-describedby="emailHelp" name="lado2" require>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular área</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-6 ">
            <div class="card text-center">
                <div class="card-header color-per">
                    Área con metodo estático
                </div>
                <div class="card-body">

                </div>
                <form class="formularioans" method="post" action="">
                    <div class="row justify-content-center">
                        <div class="mb-3 col-8">
                            <label for="lado" class="form-label">Ingrese lado de Cubo</label>
                            <input type="text" class="form-control" id="lado" aria-describedby="emailHelp" name="lado3" require>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular área</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    include_once ("controllers/controller.php");
    if($_POST){
        
        if(isset($_POST["lado2"])){
            
    
?>

<div class="modal-per">

    <?php
                $control = new Controller();
                $resultado =  $control->volumen($_POST["lado2"]);

                echo "Volumen de Cubo: ".$resultado;
                    
                ?>

</div>
<?php
        }
        elseif(isset($_POST["lado3"])){

        ?>

<div class="modal-per">

    <?php
$control = new Controller();
$resultado =  $control->AreaCuboSttic($_POST["lado3"]);

echo "Area del cubo: ".$resultado;
    
?>

</div>

<?php
            
        }
        elseif(isset($_POST["lado1"])){

            ?>

                <div class="modal-per">

                    <?php
                $control = new Controller();
                $resultado =  $control->areaCuboNoEstatic($_POST["lado1"]);

                echo "Área del Cubo: ". $resultado;
    
        ?>

                </div>
<?php
                
            }
    }
    
?>
