<!DOCTYPE html>
<html lang="es">

<head>
    <?php include(app_path() . "/../resources/views/template/head.php"); ?>
</head>


<header>
    <?php
    include(app_path() . "/../resources/views/template/header.php");
    ?>
</header>



<div class="d-flex tituloEntrada">
    <h4>Movimientos entre Almacen</h4>
</div>

<div class="contenedorComprobante">
    <div class="d-flex col justify-content-end">
        <p>N° Comprobante </p>
    </div>


    <div class="d-flex col justify-content-end gap-5 w-2">
        <p>Fecha:</p>
        <p>Hora:</p>
    </div>
</div>

<div class="container" id="contenedorBuscar">
    <div class="row">
        <div class="d-flex col justify-content-start">
            <div class="d-flex col-4">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Usuario Responsable</option>
                    <option value="1">Juan</option>
                    <option value="2">Roger</option>
                    <option value="3">kevin</option>
                </select>
            </div>
        </div>
    </div>
</div>


<div class="d-flex justify-content-start containerMovimiento">
    <div class="row">
        <div class="d-flex justify-content-start">
            <div class="col-12 d-flex justify-content-center gap-4" id="origen">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Origen Deposito</option>
                    <option value="1">Ciclico</option>
                    <option value="2">Preparacion</option>
                    <option value="3">TML</option>
                </select>
                <div class="inputFlecha">
                    <i class="fa-solid fa-arrow-right-arrow-left" id="arrow"></i>
                </div>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Destino Deposito</option>
                    <option value="1">Talar</option>
                    <option value="2">Pilar</option>
                    <option value="3">Intralog</option>
                </select>




            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <div class="row">
        <div class="d-flex justify-content-start">
            <div class="col-8 d-flex justify-content-between gap-4">
                <input id="username" type="text" class="form-control w-100" placeholder="Código" aria-label="Username" aria-describedby="basic-addon1">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Articulo</option>
                    <option value="1">Ilva</option>
                    <option value="2">San Lorenzo</option>
                    <option value="3">Portinari</option>
                </select>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Lote</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <input id="username" type="number" class="form-control w-100" placeholder="Cantidad a Mover" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
</div>
</ul>

<div class="container">
    <div class="row">


        <table class="table table-dark table-hover" style="width:100%">
                    <thead>
                        <tr class="table-primary">
                                    <th>Código</th>
                                    <th>Descripción</th>
                                    <th>Lote</th>
                    <th>Accion</th>
                                    
                                
                </tr>
                        </thead>
                    <tbody>
                 <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>

                    <td>
                        <i class="fa-solid fa-plus" id="agregar"></i>
                        <i class="fa-solid fa-pen-to-square" id="modificar"></i>
                        <i class="fa-solid fa-trash-can" id="eliminar"></i>
                    </td>

                                  
                                
                </tr>
                            <tr>
                     
                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>

                    <td>
                        <i class="fa-solid fa-plus" id="agregar"></i>
                        <i class="fa-solid fa-pen-to-square" id="modificar"></i>
                        <i class="fa-solid fa-trash-can" id="eliminar"></i>
                    </td>


                                  
                                
                </tr>
                   
            </tbody>
                   
                </table>

    </div>
</div>
<br>
<br>

<div class="container py-5">
    <div class="row">
        <div class="form-floating d-flex" id="contenedorObservaciones">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Observaciones</label>
        </div>
    </div>
</div>


<div class="container" id="contenedorGuardar">
    <div class="row">
        <div class="d-flex justify-content-start">
            <i class="fa-regular fa-floppy-disk" id="guardar"></i>
            <button type="button" class="btn btn-success" id="botonCargar"></button>

        </div>
    </div>
</div>










</body>

</html>