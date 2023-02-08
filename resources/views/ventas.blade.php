@extends('adminlte::page')

@section('title', 'VENTAS')

@section('content_header')
<div class="iconVentas">
  <img src="./img/cart.png">
  <i class="fa-cart-shopping"></i>
  <p>Ventas</p>
</div>


@stop

@section('content')




<div class="d-flex justify-content-star ">
  <div class="col">
    <div class=" container d-flex justify-content-center py-4" id="ventas">
      <a href="./usuarios">
        <div class="card text">
          <div class="card-header">NUEVO</div>
          <div class="card-body" id="bodyNuevo">
            <i class="fa fa-plus"></i>
          </div>
        </div>
      </a>
    </div>

    <div class=" container d-flex justify-content-center py-4" id="ventas">
      <a href="./usuarios">
        <div class="card text">
          <div class="card-header">FACTURAR</div>
          <div class="card-body" id="bodyFacturar">
            <i class="fa fa-file-invoice-dollar"></i>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="col">
    <div class=" container py-4" id="ventas">
      <a href="./usuarios">
        <div class="card text">
          <div class="card-header">BUSCAR</div>
          <div class="card-body" id="bodyBuscar">
            <img src="./img/lupa.svg">
          </div>
        </div>
    </div>
    </a>

    <div class=" container py-4" id="ventas">
      <a href="./usuarios">
        <div class="card text">
          <div class="card-header">REPORTES</div>
          <div class="card-body" id="bodyReportes">
            <i class="fa fa-user-plus"></i>
          </div>
        </div>
    </div>
    </a>
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