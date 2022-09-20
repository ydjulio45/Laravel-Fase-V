<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('documentos','App\Http\Controllers\TipodocumentoController');

Route::resource('roles','App\Http\Controllers\ControllerRol');

Route::resource('proveedores','App\Http\Controllers\ProveedorController');

Route::resource('usuarios','App\Http\Controllers\UsuarioController');

Route::resource('categorias','App\Http\Controllers\CategoriaController');

Route::resource('facturas','App\Http\Controllers\FacturaController');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');