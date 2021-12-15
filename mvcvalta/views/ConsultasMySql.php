<h3 class="container text-center mt-5" id="titulo">Consulta de la tabla ventas</h3>
<div class=" container mt-4">

    <div class="row justify-content-center">
        <div class="col-12">
            <img src="public/img/img.png" alt="" class="img">
        </div>
    </div>

</div>
<div class=" container mt-4">

    <div class="row justify-content-center">
        <p class="llave1">a. Seleccionar todos los datos de la tabla</p>
        <p class="frutas">SELECT id_venta,total, fecha_hora,estado FROM ventas</p>
        <p class="llave1">b. Seleccionar sólo 10 registros de la tabla</p>
        <p class="frutas">SELECT id_venta,total, fecha_hora,estado FROM ventas LIMIT 0,5</p>
        <p class="llave1">c. Seleccionar todos los datos de la tabla, ordenando la fecha de forma ASC</p>
        <p class="frutas">SELECT * from ventas ORDER BY fecha_hora ASC</p>
        <p class="llave1">d. Seleccionar sólo “id_venta” y “total” de la tabla.</p>
        <p class="frutas">SELECT id_venta,total from ventas </p>
        <p class="llave1">e. Seleccionar “id_venta” y “total” de la tabla, cuando el “total” sea mayor a 1000.</p>
        <p class="frutas">SELECT id_venta,total from ventas WHERE total > 1000 </p>
        <p class="llave1">f. Seleccionar el primer registro de la tabla.</p>
        <p class="frutas">INSERT INTO VENTAS(total,fecha_hora,estado) VALUES(3003.56,"20021-10-10",true)</p>
        <p class="llave1">g. Seleccionar el último registro de la tabla</p>
        <p class="frutas">SELECT TOP 1* FROM ventas  ORDER BY id_venta DESC</p>



    </div>
</div>