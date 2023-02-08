<!DOCTYPE html>
<html lang="es">

<head>
    <?php include(app_path() . "/../resources/views/template/head.php"); ?>
</head>

<body>


    <header>
        <?php include(app_path() . "/../resources/views/template/header.php"); ?>
    </header>

    <div class="tituloEntrada">
        <h4>Listar Entradas</h4>
    </div>
    <br>

    <div class="container d-flex justify-content-start" style="height:200px">

        <div class="row">
            <div class="col-4">
                <div class="d-flex justify-content-around">
                    <label>Fecha Inicio</label>
                    <input type="date" class="form-control" id="input_listar" placeholder="Fecha Inicio" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>

            <div class="col-4">
                <div class="d-flex">
                    <label>Fecha Final</label>
                    <input type="date" class="form-control" id="input_listar" placeholder="Fecha Final" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>

            <div class="col-4">
                <button type="button" class="btn btn-secondary">Buscar</button>
            </div>


            <div class="d-flex justufy-content-start row">
                <div class="col-3">
                    <div class="d-flex">
                        <button type="button" class="btn btn-success">Descargar Excel</button>
                    </div>
                </div>


                <div class=" fecha_registro col-4">
                    <div class="d-flex justify-content-start">

                        <input type="text" class="form-control"id="fechaRegistro" placeholder="Fecha de Registro" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                </div>
                <div class="d-flex col-2">
                    <div class="col"id="containerBoton">
                        <button type="button" class="btn btn-secondary">Buscar</button>
                        <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can" id="eliminar"></i></button>
                        </div>
                      
                    </div>
                </div>





            </div>

        </div>

    </div>
    </div>
    </div>

    <span class="placeholder col-12 bg-secondary"></span>

    <div class="container py-5">
<div class="row">

    <table class=" table table-dark table-hover"id="tableListar"style="width:100%">
        <thead>
            <tr class="table-primary">
                <th scope="col">Fecha de Registro</th>
                <th scope="col">N° de Documento</th>
                <th scope="col">Usuario Registrado</th>
                <th scope="col">Provedor</th>
                <th scope="col">Monto Total</th>
                <th scope="col">Código de Producto</th>
                <th scope="col">Articulo</th>
                <th scope="col">Img Articulo</th>
                

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">25/11/2022</th>
                <td>95934567</td>
                <td>Admin</td>
                <td>Ilva</td>
                <td>2.000.000</td>
                <td>#CO NE 45X90</td>
                <td>ILVA PORC.45X90 COMPACT NEUTRAL</td>
                <td><img class="imagen"src="./img/ceramicos/piazza-bacha.jpg"></td>
            </tr>
            <tr>
                <th scope="row">25/11/2022</th>
                <td>95934567</td>
                <td>Admin</td>
                <td>Ilva</td>
                <td>2.000.000</td>
                <td>#CO NE 45X90</td>
                <td>ILVA PORC.45X90 COMPACT NEUTRAL</td>
                <td><img class="imagen"src="./img/ceramicos/klaukol-verde.jpg"></td>
            </tr>
            <tr>
                <th scope="row">25/11/2022</th>
                <td>95934567</td>
                <td>Admin</td>
                <td>Ilva</td>
                <td>2.000.000</td>
                <td>#CO NE 45X90</td>
                <td>ILVA PORC.45X90 COMPACT NEUTRAL</td>
                <td><img class="imagen"src="./img/ceramicos/murano1.jpg"></td>
            </tr>
            <tr>
                <th scope="row">25/11/2022</th>
                <td>95934567</td>
                <td>Admin</td>
                <td>Ilva</td>
                <td>2.000.000</td>
                <td>#CO NE 45X90</td>
                <td>ILVA PORC.45X90 COMPACT NEUTRAL</td>
                <td><img class="imagen"src="./img/ceramicos/black.webp"></td>
            </tr>
            <tr>
                <th scope="row">25/11/2022</th>
                <td>95934567</td>
                <td>Admin</td>
                <td>Ilva</td>
                <td>2.000.000</td>
                <td>#CO NE 45X90</td>
                <td>ILVA PORC.45X90 COMPACT NEUTRAL</td>
                <td><img class="imagen"src="./img/ceramicos/klaukol-red.jpg"></td>
            </tr>
            <tr>
                <th scope="row">25/11/2022</th>
                <td>95934567</td>
                <td>Admin</td>
                <td>Ilva</td>
                <td>2.000.000</td>
                <td>#CO NE 45X90</td>
                <td>ILVA PORC.45X90 COMPACT NEUTRAL</td>
                <td><img class="imagen"src="./img/ceramicos/klaukol-red.jpg"></td>
            </tr>
            <tr>
                <th scope="row">25/11/2022</th>
                <td>95934567</td>
                <td>Admin</td>
                <td>Ilva</td>
                <td>2.000.000</td>
                <td>#CO NE 45X90</td>
                <td>ILVA PORC.45X90 COMPACT NEUTRAL</td>
                <td><img class="imagen"src="./img/ceramicos/alberdi.webp"></td>
            </tr>
            <tr>
                <th scope="row">25/11/2022</th>
                <td>95934567</td>
                <td>Admin</td>
                <td>Ilva</td>
                <td>2.000.000</td>
                <td>#CO NE 45X90</td>
                <td>ILVA PORC.45X90 COMPACT NEUTRAL</td>
                <td><img class="imagen"src="./img/ceramicos/klaukol-verde.jpg"></td>
            </tr>
         
            


    </table>

</div>
</div>


   



</body>

</html>