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
        <h4>Toma de Inventarios</h4>
    </div>
    <br>

    <div class="container d-flex justify-content-start" style="height:200px">

        <div class="row">
            <div class="col-4">
                <div class="d-flex justify-content-around">
                    <label>Fecha Inicio</label>
                    <input type="date" class="form-control" placeholder="Fecha Inicio" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>

            <div class="col-4">
                <div class="d-flex">
                    <label>Fecha Final</label>
                    <input type="date" class="form-control" placeholder="Fecha Final" aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>

            <div class="col-4">
                <button type="button" class="btn btn-secondary">Buscar</button>
            </div>
            <hr>

            <div class="d-flex justufy-content-start row">
                <div class="col-3">
                    <div class="d-flex">
                        <button type="button" class="btn btn-success">Descargar Excel</button>
                    </div>
                </div>


                <div class="fecha_registro col-4 gap-4 ">
                    <div class="d-flex justify-content-start gap-2">
                        <label>Buscar por:</label>
                        <select class="form-select" name="" id="">
                            <option selected>Código Producto</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <input type="text" class="form-control" placeholder="Productos" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                </div>
                <div class="d-flex col-2">
                    <div class="col">
                        <button type="button" class="btn btn-secondary">Buscar</button>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-danger">Borrar</button>
                    </div>
                </div>
            </div>





        </div>

    </div>

    </div>
    </div>
    </div>

    <div class="container py-5">
<div class="row">

<hr>
    <table class="table table-striped table-hover table-primary"style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Código</th>
      <th scope="col">Descripción</th>
      <th scope="col">Lote</th>
      <th scope="col">Rubro</th>
      <th scope="col">Almacen</th>
      <th scope="col">Entradas</th>
      <th scope="col">Salidas</th>
      <th scope="col">Stock Actual</th>
      <th scope="col">Diferencia</th>
      <th scope="col">Ajuste</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>0001</td>
      <td>Ilva 45x90 Calacata</td>
      <td>1104</td>
      <td>Pisos y Porcelanatos</td>
      <td>Talar</td>
      <td>600</td>
      <td>250</td>
      <td>350</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>0001</td>
      <td>Ilva 45x90 Calacata</td>
      <td>1104</td>
      <td>Pisos y Porcelanatos</td>
      <td>Talar</td>
      <td>600</td>
      <td>250</td>
      <td>350</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>0001</td>
      <td>Ilva 45x90 Calacata</td>
      <td>1104</td>
      <td>Pisos y Porcelanatos</td>
      <td>Talar</td>
      <td>600</td>
      <td>250</td>
      <td>350</td> 
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>0001</td>
      <td>Ilva 45x90 Calacata</td>
      <td>1104</td>
      <td>Pisos y Porcelanatos</td>
      <td>Talar</td>
      <td>600</td>
      <td>250</td>
      <td>350</td> 
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>0001</td>
      <td>Ilva 45x90 Calacata</td>
      <td>1104</td>
      <td>Pisos y Porcelanatos</td>
      <td>Talar</td>
      <td>600</td>
      <td>250</td>
      <td>350</td> 
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>0001</td>
      <td>Ilva 45x90 Calacata</td>
      <td>1104</td>
      <td>Pisos y Porcelanatos</td>
      <td>Talar</td>
      <td>600</td>
      <td>250</td>
      <td>350</td> 
    </tr>

  </tbody>
</table>
</div>
</div>
<br>







</body>

</html>