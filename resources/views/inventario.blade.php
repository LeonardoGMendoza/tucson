<?php include("Env.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include(app_path() . "/../resources/views/template/head.php"); ?>
    <script type="text/javascript" src="js/inventario.js"></script>
</head>

<body>

    <header>
        <?php include(app_path() . "/../resources/views/template/header.php"); ?>
    </header>

    <div class="container py-5">
        <div class="row">
            <div class="refine-datatable">
                <div class="container-square" style="border: 30px;">
                    <div class="refine-group">
                        <div style="display:inline">

                        </div>

                        <br>
                        <div class="d-flex justify-content-around">
                            <div class="row">
                                <div class="col-3">

                                    <select class="form-select form-select-sm " aria-label=".form-select-sm example" style="width:60% " id="almacen_filter">
                                        <option value='1'>Mi Profile</option>
                                        <option value='2'>Logout</option>
                                    </select>


                                </div>
                                <div class="col-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width:60%" id="superrubro_filter">
                                        <option value='1'>Mi Profile</option>
                                        <option value='2'>Logout</option>
                                    </select>

                                </div>

                                <div class="col-3">

                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width:60%" id="rubro_filter">
                                        <option value='1'>Mi Profile</option>
                                        <option value='2'>Logout</option>
                                    </select>

                                </div>

                                <div class="col-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width:60%" id="marca_filter">
                                        <option value='1'>Mi Profile</option>
                                        <option value='2'>Logout</option>
                                    </select>


                                </div>



                                <div class="refine-datatable">
                                    <div class="container-square" style="margin:20px;border: 20px;">
                                        <div class="refine-group">
                                            <div style="display:inline">
                                                <br>




                                            </div>
                                        </div>
                                    </div>
                                    <table id="inventario_table" style="width:100%">
                                        <thead>
                                            <tr class="text-bg-primary p-3">
                                                <th>Código </th>
                                                <th>Artículo</th>
                                                <th>idMarca</th>
                                                <th>Marca</th>
                                                <th>idSuper Rubro</th>
                                                <th>Super Rubro</th>
                                                <th>idRubro</th>
                                                <th>Rubro</th>
                                                <th>Lote</th>
                                                <th>Stock Total</th>
                                                <th>Cantidad</th>
                                                <th>Almacen</th>
                                                <th>QR</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <div id="qrcode"></div>
                                </div>
                            </div>

                        </div>
                    </div>


                  



</body>

</html>