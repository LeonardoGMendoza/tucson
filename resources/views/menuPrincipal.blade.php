@extends('adminlte::page')

@section('title', 'DASHBOARD')

@section('content_header')

<div class="iconPrincipal">
  <img src="./img/aplicacion.png">
  <p>Menu Principal</p>
</div>
@stop

@section('content')
<div class=" container" id="contenedorPrincipal">

  <a href="./usuarios">
    <div class="col">
      <div class="card " style="max-width: 20rem;" id="principal">
        <div class="card-header" id="header">USUARIOS</div>
        <div class="card-body" id="bodyUsuario">
          <i class="fa fa-users"></i>
        </div>
  </a>
</div>

<a href="./ventas">
  <div class="card " style="max-width: 20rem;" id="principal">
    <div class="card-header" id="header">VENTAS</div>
    <div class="card-body" id="bodyVentas">
      <i class="fa fa-credit-card"></i>
    </div>
  </div>
</a>

<a href="./inventarioNew">
  <div class="card " style="max-width: 20rem;" id="principal">
    <div class="card-header" id="header">INVENTARIO</div>
    <div class="card-body" id="bodyInventario">
      <i class="fa fa-boxes"></i>
    </div>
  </div>
  </div>
</a>

<a href="./menu_inventario">
  <div class="col">
    <div class="card " style="max-width: 20rem;" id="principal">
      <div class="card-header" id="header">LOGISTICA</div>
      <div class="card-body" id="bodyLogistica">
        <i class="fa fa-truck fast"></i>
      </div>
    </div>
</a>

<a href="./menu_inventario">
  <div class="card " style="max-width: 20rem;" id="principal">
    <div class="card-header" id="header">OPERACIONES</div>
    <div class="card-body" id="bodyOperaciones">
      <i class="fa fa-network-wired"></i>
    </div>
  </div>
</a>

<a href="./dashboard">
  <div class="card " style="max-width: 20rem;" id="principal">
    <div class="card-header" id="header">DASHBOARD</div>
    <div class="card-body" id="bodyDashboard">
      <i class="fa fa-chart-line"></i>
    </div>
  </div>
</a>
</div>
</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop