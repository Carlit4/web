<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\ClientesController;


Route::get('/', function () {
    return view('prueba');
});

//Route::resource('/', UsuariosController::class);
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios/{usuario}/edit', [UsuariosController::class, 'edit']) -> name('usuarios.edit');
Route::delete('/usuarios/{usuario}', [UsuariosController::class, 'destroy']) -> name('usuarios.destroy');
Route::post('/usuarios', [UsuariosController::class, 'store']) -> name('usuarios.store');
Route::put('/usuarios/{usuario}', [UsuariosController::class, 'update']) -> name('usuarios.update');


Route::get('/tipos', [TiposController::class,'index'])->name('tipos.index');
Route::post('/tipos', [TiposController::class,'store'])->name('tipos.store');
Route::get('/tipos/{tipo}/edit', [TiposController::class,'edit'])->name('tipos.edit');
Route::delete('/tipos/{tipo}', [TiposController::class, 'destroy']) -> name('tipos.destroy');
Route::put('/tipos/{tipo}', [TiposController::class, 'update']) -> name('tipos.update');



Route::get('/vehiculos', [VehiculosController::class,'index'])->name('vehiculos.index');
Route::get('/vehiculos/{vehiculo}/edit', [VehiculosController::class,'edit'])->name('vehiculos.edit');
Route::get('/vehiculos/create', [VehiculosController::class, 'create'])->name('vehiculos.create');
Route::post('/vehiculos', [VehiculosController::class,'store'])->name('vehiculos.store');
Route::delete('/vehiculos/{vehiculo}', [VehiculosController::class, 'destroy']) -> name('vehiculos.destroy');
Route::put('/vehiculos/{vehiculo}', [VehiculosController::class, 'update']) -> name('vehiculos.update');



Route::get('/clientes', [ClientesController::class,'index'])->name('clientes.index');
Route::post('/clientes', [ClientesController::class,'store'])->name('clientes.store');
Route::get('/clientes/{cliente}/edit', [ClientesController::class, 'edit']) -> name('clientes.edit');
Route::put('/clientes/{cliente}', [ClientesController::class, 'update']) -> name('clientes.update');
Route::delete('/clientes/{cliente}', [ClientesController::class, 'destroy']) -> name('clientes.destroy');
Route::get('/clientes/{cliente}', [ClientesController::class, 'show']) ->name('clientes.show');




