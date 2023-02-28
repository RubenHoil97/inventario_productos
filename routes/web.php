<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/', [ProductoController::class, 'index']);

Route::view("/agregar", "nuevo_producto")
->name("formAgregar");

Route::post("/agregar/nuevo_producto", [ProductoController::class, 'agregarProducto']);

Route::get('/home', [\App\Http\Controllers\ProductoController::class, 'index'])->name('home');

Route::get('/buscar', [ProductoController::class, 'buscador']);