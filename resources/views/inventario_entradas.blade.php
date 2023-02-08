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
        <h4>Nueva Entrada</h4>
    </div>
    <br>

    <div class="container">

        <div class="row">


            <div class="col-4">
                <input type="text" class="form-control" placeholder="N° de Documento" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="col-4">
                <input type="date" class="form-control" placeholder="Fecha de Documento" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>


        </div>
    </div>
    <br>


    <hr>

    <div class="container">

        <div class="row">


            <div class="col">
                <input type="text" class="form-control" placeholder="Documento Proveedor" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre Proveedor" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <br>
            <div class="col">
                <button type="button" class="btn btn-secondary">Buscar</button>
            </div>


        </div>

        <br>

    </div>

    </div>

    <div class="container">

        <div class="row">


            <div class="col">
                <input type="text" class="form-control" placeholder="Código de Producto" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="Descripción Producto" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <br>
            <div class="col">
                <button type="button" class="btn btn-secondary">Buscar</button>
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="Precio de Compra" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="col">
                <input type="text" class="form-control" placeholder="Precio de Venta" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="col">
                <select class="form-select" size="1" aria-label="size 3 select example">
            </div>
            <br>
            <br>
            <div class="col">
                <option selected>Cantidad</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>

                </select>
            </div>

        </div>


    </div>
    </div>
    <br>

    <span class="placeholder col-12 bg-secondary"></span>

    <br>
    <br>
    <br>

    <div class="container py-5">
        <div class="row" style="width:100%">

            <table class=" table table-dark table-hover">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Código</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio Compra</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col">img Articulo</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">000001</th>
                        <td>Rosseto 57x57</td>
                        <td>24JK</td>
                        <td>420.000<img class="imagen" src=""></td>
                        <td>280.000</td>
                        <td><img class="imagen" src="./img/ceramicos/alberdi.webp"></td>

                    </tr>
                    <tr>
                        <th scope="row">000002</th>
                        <td>Rosseto 57x57</td>
                        <td>24JK</td>
                        <td>420.000<img class="imagen" src=""></td>
                        <td>280.000</td>
                        <td><img class="imagen" src="./img/ceramicos/klaukol-red.jpg"></td>

                    </tr>
                    <tr>
                        <th scope="row">000003</th>
                        <td>Rosseto 57x57</td>
                        <td>24JK</td>
                        <td>420.000<img class="imagen" src=""></td>
                        <td>280.000</td>
                        <td><img class="imagen" src="./img/ceramicos/klaukol-red.jpg"></td>

                    </tr>
                    <tr>
                        <th scope="row">000004</th>
                        <td>Rosseto 57x57</td>
                        <td>24JK</td>
                        <td>420.000<img class="imagen" src=""></td>
                        <td>280.000</td>
                        <td><img class="imagen" src="./img/ceramicos/black.webp"></td>

                    </tr>
                    <tr>
                        <th scope="row">000005</th>
                        <td>Rosseto 57x57</td>
                        <td>24JK</td>
                        <td>420.000<img class="imagen" src=""></td>
                        <td>280.000</td>
                        <td><img class="imagen" src="./img/ceramicos/murano1.jpg"></td>

                    </tr>
                    <tr>
                        <th scope="row">000006</th>
                        <td>Rosseto 57x57</td>
                        <td>24JK</td>
                        <td>420.000<img class="imagen" src=""></td>
                        <td>280.000</td>
                        <td><img class="imagen" src="./img/ceramicos/piazza-bacha.jpg"></td>

                    </tr>
                    <tr>
                        <th scope="row">000001</th>
                        <td>Rosseto 57x57</td>
                        <td>24JK</td>
                        <td>420.000<img class="imagen" src=""></td>
                        <td>280.000</td>
                        <td><img class="imagen" src="./img/ceramicos/klaukol-verde.jpg"></td>

                    </tr>


                    </tr>
                </tbody>
            </table>


            <br>
            <div class="container" id="contenedorGuardar">
                <div class="row">
                    <div class="d-flex justify-content-start">
                        <i class="fa-regular fa-floppy-disk" id="guardar"></i>
                        <button type="button" class="btn btn-success" id="botonCargar"></button>
                    </div>
                </div>
            </div>

            <br>



        </div>
    </div>

</body>

</html>