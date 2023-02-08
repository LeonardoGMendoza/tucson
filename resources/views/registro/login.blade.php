<!DOCTYPE html>
<html lang="es">

<head>
  <?php include(app_path() . "/../resources/views/template/head.php"); ?>
</head>

<body>
  <header>
    <?php
    include(app_path() . "/../resources/views/template/header.php");
    ?>
  </header>
  <br>



  <body class=" contenedorLogin">
    
    <div class="contenedor d-flex justify-content-center aling-items-center " style="height:490px">
      <div class="p-5 mt-4 text-dark rounded-2" style="width:25rem" id="containerLogin">
        <div class="d-flex justify-content-center">
          <img src="./img/usuariofreepik.png" class="img-fluid" alt="Sample image" style="height: 5rem">
        </div>
        <div class="d-flex justify-content-center fs-1 fw-bold">
          Login
        </div>
        <form action="/login" method="POST">
        @csrf
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-user"></i></span>
          <input id="username" type="text" name="username" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-lock"></i></span>
          <input id="password" type="password" name="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="d-flex justify-content-around mt-4">
          <div class="d-flex aling-items-center gap-2">
            <input class="form-check-input" type="checkbox" />
            <div style="font-size: 0.9rem"> Recordar contraseña</div>
          </div>
          <div>
            <a href="./registro" class="text-decoration-none text-dark fw-semibold fst-italic">Registrarme?</a>
          </div>
        </div>
        <br>

        <input type="submit" value="ENTRAR"class="btn btn-secondary text-white fw-semibold shadow-sm w-100 mt-4" id="login"></div>
        </form>

      </div>
    </div>
    </div>

    

  </body>

</html>