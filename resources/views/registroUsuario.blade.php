@extends('adminlte::page')

@section('title', 'USUARIOS')

@section('content_header')
<div class="iconUsuario">
    <img src="./img/add-user.png">
    <p>Registro</p>
</div>


@stop

@section('content')

<div class="container_formulario">
    <form class="row g-8 mx-4 contenedor  mt-4 p-4 border rounded-5  d-flex justify-content-center aling-items-center" id="bgRegistro">
        <div class="d-flex justify-content-center ">

        </div>

        <div class="col-md-4" id="emailRegistro">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
            <i class="fa fa-envelope"></i>
        </div>
        <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
            <i class="fa fa-unlock"></i>
        </div>
        <div class="col-8">
            <label for="inputAddress" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            <i class="fa fa-house"></i>

        </div>
        <div class="col-8 mt-2">
            <label for="inputAddress2" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            <i class="fa-solid fa-phone"></i>
        </div>

        <div class="col-8 mt-2">
            <label for="inputCity" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="inputCity">
            <i class="fa fa location-dot"></i>

        </div>

        <div class="col-8 md-4 mt-2">
            <label for="inputState" class="form-label">Estado</label>
            <select id="inputState" class="form-select">
                <option selected>Select...</option>
            </select>
        </div>

        <div class="col-12 d-flex justify-content-center mt-2" id="botoRegistro">
            <button type="submit" class="btn btn-dark">Enviar</button>
        </div>
</div>


</form>



</div>
</div>
<br>
<br><br>
</body>

</html>




<!--div class="row" style="heightx:400px"-->




@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop