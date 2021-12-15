<h3 class="container text-center mt-5">Fomrulario de contacto </h3>



<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-6 ">
            <div class="card text-center">
                <div class="card-header color-per">
                    Llenar el formulario
                </div>
                <div class="card-body">

                </div>
                <form class="formulariocontacto" method="post" action="views/sitio/Contacto.php" name= "frm">
                    <div class="row justify-content-center">
                        <div class="mb-3 col-8">
                            <label for="lado" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" name="nombre"
                                require>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="lado" class="form-label">Correo</label>
                            <input type="text" class="form-control" id="correo" aria-describedby="emailHelp" name="correo"
                                require>
                        </div>
                        <div class="mb-3 col-8">
                        <label for="floatingTextarea2">Mensaje</label>
                            <textarea class="form-control"  id="floatingTextarea2"
                                style="height: 100px" name="mensaje"></textarea>
                            
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Guardar datos</button>
                </form>
            </div>
        </div>
    </div>
</div>