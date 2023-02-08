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


<div class="container_formulario">
<form method="post" class="row g-8 mx-4 contenedor  mt-4 p-4 border rounded-4  d-flex justify-content-center aling-items-center"id="bgRegistro">
    <div class="d-flex justify-content-center">
        <img src="./img/usuariofreepik.png" class="img-fluid" alt="Sample image" style="height: 5rem">
    </div>
    <div class="d-flex justify-content-center fw-bold"id="tituloRegistro">
                Registro
            </div>
    <div class="col-md-4 mt-4">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" name="email"class="form-control" id="inputEmail4"placeholder="@gmail.com">
    </div>
    <div class="col-md-4 mt-4">
        <label for="inputPassword4" class="form-label">Nombres</label>
        <input type="text" name="password"class="form-control" id="inputPassword4">
    </div>
    <div class="col-8">
        <label for="inputAddress" class="form-label">Password</label>
        <input type="password" name="direccion"class="form-control" id="inputAddress">
    </div>
    <div class="col-8">
        <label for="inputAddress" class="form-label">Confirmar Password</label>
        <input type="password" name="direccion"class="form-control" id="inputAddress">
    </div>
    <div class="col-8">
        <label for="inputAddress2" class="form-label">Teléfono</label>
        <input type="text" name="telefono"class="form-control" id="inputAddress2" placeholder="911 09305683">
    </div>
    <div class="col-6 md-4">
        <label for="inputCity" class="form-label">Ciudad</label>
        <input type="text" name="ciudad"class="form-control" id="inputCity">
    </div>
    <div class="col-md-2">
        <label for="inputState" class="form-label">Estado</label>
        <select id="inputState" class="form-select">
            <option selected>Elegir...</option>
            <option>...</option>
        </select>
    </div>
   
    
    <div class="col-12 d-flex justify-content-center mt-4"id="botoRegistro">
    <button type="submit" name="registrar"class="btn btn-dark">REGISTRAR</button> 
    </div>
</form>


</div>


</div>


</body>

</html>

<link rel="stylesheet" href="/css/admin_custom.css">