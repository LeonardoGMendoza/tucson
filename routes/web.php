<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', HomeController::class,'index');
    


Route::get('/login', function () {
    return view('login');
});

Route::get('/menuPrincipal', function () {
    return view('menuPrincipal');
});


//Inicio de Rutas de modulo de inventario

Route::get('/menu_inventario', function () {
    return view('menu_inventario');
});

Route::get('/toma_inventario', function () {
    return view('/toma_inventario');
});

Route::get('/logistica_movimientos', function () {
    return view('/logistica_movimientos');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/ventas', function () {
    return view('ventas');
});





Route::get('/listar_entradas', function () {
    return view('listar_entradas');
});

Route::get('/inventario', function () {
    return view('inventario');
});

Route::get('/inventario_salidas', function () {
    return view('inventario_salidas');
});

Route::get('/listar_salidas', function () {
    return view('listar_salidas');
});





Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/inventarioNew', function () {
    return view('inventarioNew');
});

Route::get('/inventario_listar', function () {
    return view('inventario_listar');
});

Route::get('/registro', function () {
    return view('registro.registro_usuario');
});



Route::get('/registro',[RegisterController::class,'show']);
Route::post('/registro',[RegisterController::class,'registro']);

Route::get('/login',[LoginController::class,'show']);
Route::post('/login',[LoginController::class,'login']);



// Fin de Rutas de modulo de inventario