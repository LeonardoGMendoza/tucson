@extends('adminlte::page')

@section('title', 'USUARIOS')

@section('content_header')
<div class="iconUsuario">
  <img src="./img/usuario.png">
  <p>Usuarios</p>
</div>


@stop

@section('content')


<br>
<br>

<div class="d-flex">
  <div class=" containerUsuario"id="usuarios">
    <a href="./usuarios">
      <div class="card text">
        <div class="card-header">LISTAR</div>
        <div class="card-body" id="bodyListar">
          <i class="fa fa-list"></i>
        </div>
      </div>
    </a>
  </div>

  <div class=" containerUsuario"id="usuarios">
  <div class=" container">
    <a href="./usuarios">
      <div class="card text">
        <div class="card-header">CREAR</div>
        <div class="card-body" id="bodyCrear">
        <i class="fa fa-plus"></i>
        </div>
      </div>
    </a>
  </div>
  </div>

  <div class=" containerUsuario"id="usuarios">
  <div class=" container">
    <a href="./usuarios">
      <div class="card text">
        <div class="card-header">ROL</div>
        <div class="card-body" id="bodyRol">
        <i class="fa fa-user-plus"></i>
        </div>
      </div>
  </div>
  </a>
</div>
</div>


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