<h3 class="container text-center mt-5">Formulario de validacion de variables </h3>



<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-6 ">
            <div class="card text-center">
                <div class="card-header color-per">
                    llenar formulario para dividir sus respectivo núnmeros
                </div>
                <div class="card-body">

                </div>
                <form class="formulariovariables" method="post"  name= "frm">
                    <div class="row justify-content-center">
                        <div class="mb-3 col-8">
                            <label for="lado" class="form-label">número 1</label>
                            <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" name="numero1"
                                require>
                            <span class="hidden alerta">Los datos deben ser númerico y no vacios</span>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="lado" class="form-label">número 2</label>
                            <input type="text" class="form-control" id="correo" aria-describedby="emailHelp" name="numero2"
                                require>
                            <span class="hidden">los datos deben ser númericos y no vacios</span>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">ejecutar división</button>
                </form>
            </div>
        </div>
    </div>
</div>



<div class= "container-propio hidden">
    <div class="mensaje-divi">
        la divión es: <span class="division"></span>
    </div>
</div>