<!DOCTYPE html>
<html lang="es">

<head>
    <?php include(app_path() . "/../resources/views/template/head.php"); ?>
</head>

<body>


    <header>
        <?php include(app_path() . "/../resources/views/template/header.php"); ?>
    </header>


    <br>
    <div class="tituloEntrada">
        <h4>Lista de Salidas</h4>
    </div>
    <br>

    <div class="container">

        <div class="row">


            <div class="col-4">
                <label>Fecha Inicio</label>
                <input type="date" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="col-4">
                <label>Fecha Final</label>
                <input type="date" class="form-control" placeholder="Fecha de Registro:" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="col-4 mt-3" id="btnSalida">
                <button type="button" class="btn btn-secondary">Buscar</button>
            </div>


            <div class="col-2 mt-3">
                <label></label>
                <button type="button" class="btn btn-success">Descargar Excel</button>
            </div>

            <div class="col-2 ">
                <label>Buscar por:</label>
                <select class="form-select" id="">
                    <option selected>Codigo de Producto:</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>

                </select>
            </div>

            <div class="col-2 mt-4">
                <input type="date" class="form-control" placeholder="Fecha de Registro:" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="col-2 mt-4">
                <button type="button" class="btn btn-secondary">Buscar</button>
                </div>
            </div>

          
            </div>
            </div>

        <br>
        <br>
        <br>
        <br>



    <table class=" table table-striped table-hover table-primary mt-4">
        <thead>
            <tr class="table-primary">
                <th scope="col">Fecha Registro</th>
                <th scope="col">N° Documento</th>
                <th scope="col">Usuario Registrado</th>
                <th scope="col">Cliente</th>
                <th scope="col">Monto Total</th>
                <th scope="col">Código Producto</th>
                <th scope="col">Descripcion Articulo</th>
                <th scope="col">Categoria Articulo</th>
                <th scope="col">Almacen</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>0001</td>
                <td>Ilva 45x90 Calacata</td>
                <td>1104</td>
                <td>Pisos y Porcelanatos</td>
                <td>Talar</td>
                <td>600</td>
                <td>250</td>
                <td>350</td>
                <td>100</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>


    </table>


</body>

</html>