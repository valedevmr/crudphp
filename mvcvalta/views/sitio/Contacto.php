

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-6 ">
            <div class="card text-center">
                <div class="card-header color-per">
                   Datos contacto
                </div>
                <div class="card-body">
                <h5 class="card-title">Nombre</h5>
   <?php
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $mensaje = $_POST["mensaje"];
        echo $nombre;
       
   ?>   
   <h5 class="card-title">correo</h5>
   <?php
        
   
        echo $correo;
      
   ?>   
   <h5 class="card-title">Mensaje</h5>
   <?php
        
   
        echo $correo;
      
   ?> 
                </div>
               
            </div>
        </div>
    </div>
</div>

</body>

</html>