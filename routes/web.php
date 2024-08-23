<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedorController;


Route::get('/', function () {
    return view('welcome');
});

//Rutas de Productos
Route::get('/productos/mostrar', [ProductoController::class, 'mostrar']);

Route::get('/productos/agregar',
[ProductoController::class, 'agregarProducto']);

Route::post('/productos/crear',
[ProductoController::class, 'crear'])->name('producto-agregar');

//Rutas de Empleados
Route::get('/empleados/mostrar', [EmpleadoController::class, 'mostrar']);

Route::get('/empleados/agregar',
[EmpleadoController::class, 'agregarEmpleado']);

Route::post('/empleados/crear',
[EmpleadoController::class, 'crear'])->name('empleado-agregar');

//Rutas de Proveedores
Route::get('/proveedores/mostrar', [ProveedorController::class, 'mostrar']);

Route::get('/proveedores/agregar',
[ProveedorController::class, 'agregarProveedor']);

Route::post('/proveedores/crear',
[ProveedorController::class, 'crear'])->name('proveedor-agregar');