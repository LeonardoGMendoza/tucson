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



    <div class="iconPrincipalInventario">
        <i class="fa fa-boxes"></i>
        <p>Inventario</p>
    </div>

    <div class="containerInventario">
        <div class="row d-flex justify-content-around">

            <div class="col-2 mt-4">
                <div class="cardNew">
                    <img src="./img/freeEntrada.png" class="card-img-top" />
                    <div class="card-body">
                        <h3 class="card-title">Entradas</h3>
                        <div class="d-flex justify-content-between">
                            <p>Nuevo, Listar, Buscar</p>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mi-modalEntrada">Mas</button>
                    </div>
                </div>
            </div>



            <div class="col-2 mt-4">
                <div class="cardNew">
                    <img src="./img/freeSalida.png" class="card-img-top" />
                    <div class="card-body">
                        <h3 class="card-title">Salidas</h3>
                        <div class="d-flex justify-content-between">
                            <p>Nuevo, Listar, Buscar</p>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mi-modalSalida">Mas</button>
                    </div>
                </div>
            </div>

            <div class="col-2 mt-4">
                <div class="cardNew">
                    <img src="./img/productosfree.png" class="card-img-top" />
                    <div class="card-body">
                        <h3 class="card-title">Productos</h3>
                        <div class="d-flex justify-content-between">
                            <p>Crear, Modificar, Eliminar</p>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mi-modalProducto">Mas</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row d-flex justify-content-around">
            <div class="col-2 mt-4">
                <div class="cardNew">
                    <img src="./img/freeAlmacen.png" class="card-img-top" />
                    <div class="card-body">
                        <h3 class="card-title">Toma Inventario</h3>
                        <div class="d-flex justify-content-between">
                            <p>Entradas, Salidas, Dif Stock</p>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mi-modalInventario">Mas</button>
                    </div>
                </div>
            </div>

            <div class="col-2 mt-4">
                <div class="cardNew">
                    <img src="./img/movimientosfree.png" class="card-img-top" />
                    <div class="card-body">
                        <h3 class="card-title">Movimientos</h3>
                        <div class="d-flex justify-content-between">
                            <p>Origen, Destino</p>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mi-modalMovimiento">Mas</button>
                    </div>
                </div>
            </div>

            <div class="col-2 mt-4">
                <div class="cardNew">
                    <img src="./img/freeConfiguracion.png" class="card-img-top" />
                    <div class="card-body">
                        <h3 class="card-title">Configuracion</h3>
                        <div class="d-flex justify-content-between">
                            <p>Soporte</p>
                        </div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mi-modalConfiguracion">Mas</button>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--modal code-->





    <div class="modal fade" id="mi-modalEntrada" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content" id="modalContent">

                <div class="modal-header" id="modalHeader">
                    <h5 class="modal-title">Opciones</h5>
                    <button class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>

                <div class="modal-body" id="modalBody">
                <a href="./inventario"><button type="button" class="btn" data-bs-dismiss="modal">Nuevo</button></a>
                <a href="./inventario_listar"><button type="button" class="btn">Listar </button></a>
                <a href="./inventario_entradas"><button type="button" class="btn">Buscar</button></a>
                </div>
                <div class="modal-footer" id="modalFooter">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    
    <div class="modal fade" id="mi-modalSalida" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content" id="modalContent">

                <div class="modal-header" id="modalHeader">
                    <h5 class="modal-title">Opciones</h5>
                    <button class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>

                <div class="modal-body" id="modalBody">
                <a href="./inventario_entradas"><button type="button" class="btn" data-bs-dismiss="modal">Nuevo</button></a>
                <a href="./inventario_entradas"> <button type="button" class="btn">Listar </button></a>
                <a href="./inventario_entradas"><button type="button" class="btn">Buscar</button></a>
                </div>

                <div class="modal-footer" id="modalFooter">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    
    <div class="modal fade" id="mi-modalProducto" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content" id="modalContent">

                <div class="modal-header" id="modalHeader">
                    <h5 class="modal-title">Opciones</h5>
                    <button class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>

                <div class="modal-body" id="modalBody">
                <a href="./inventario_entradas"><button type="button" class="btn" data-bs-dismiss="modal">Nuevo</button></a>
                <a href="./inventario_entradas"><button type="button" class="btn">Cargar </button></a>
                <a href="./inventario_entradas"><button type="button" class="btn">Listar</button></a>
                </div>

                <div class="modal-footer" id="modalFooter">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    
    <div class="modal fade" id="mi-modalInventario" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content" id="modalContent">

                <div class="modal-header" id="modalHeader">
                    <h5 class="modal-title">Opciones</h5>
                    <button class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>

                <div class="modal-body" id="modalBody">
                <a href="./inventario_entradas"><button type="button" class="btn" data-bs-dismiss="modal">Entradas</button></a>
                <a href="./inventario_entradas"><button type="button" class="btn">Salidas </button></a>
                <a href="./inventario_entradas"><button type="button" class="btn">Dif.Stock</button></a>
                </div>

                <div class="modal-footer" id="modalFooter">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    
    <div class="modal fade" id="mi-modalMovimiento" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content" id="modalContent">

                <div class="modal-header" id="modalHeader">
                    <h5 class="modal-title">Opciones</h5>
                    <button class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>

                <div class="modal-body" id="modalBody">
                <a href="./inventario_entradas"><button type="button" class="btn" data-bs-dismiss="modal">Origen</button></a>
                <a href="./inventario_entradas"><button type="button" class="btn">Destino</button></a>
                <a href="./inventario_entradas"><button type="button" class="btn">Buscar</button></a>
                </div>

                <div class="modal-footer" id="modalFooter">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    
    <div class="modal fade" id="mi-modalConfiguracion" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content" id="modalContent">

                <div class="modal-header" id="modalHeader">
                    <h5 class="modal-title">Opciones</h5>
                    <button class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>

                <div class="modal-body" id="modalBody">
                <a href="./inventario_entradas"><button type="button" class="btn" data-bs-dismiss="modal">Nuevo</button></a>
                <a href="./inventario_entradas"><button type="button" class="btn">Listar </button></a>
                <a href="./inventario_entradas"><button type="button" class="btn">Buscar</button></a>
                </div>

                <div class="modal-footer" id="modalFooter">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <link rel="stylesheet" href="/css/admin_custom.css">









    <script src="resources/inventarioNew.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="resources/sweetAlert.js"></script>







</body>

</html>