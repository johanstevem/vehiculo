<?php

use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

// Ruta principal que muestra el listado de vehículos
Route::get('/', [VehiculoController::class, 'index'])->name('vehiculos.index');

// Ruta para mostrar el formulario de creación de vehículos
Route::get('/vehiculos/create', [VehiculoController::class, 'create'])->name('vehiculos.create');

// Ruta para guardar un nuevo vehículo
Route::post('/vehiculos', [VehiculoController::class, 'store'])->name('vehiculos.store');

// Ruta para mostrar el formulario de edición de un vehículo
Route::get('/vehiculos/{id}/edit', [VehiculoController::class, 'edit'])->name('vehiculos.edit');

// Ruta para actualizar un vehículo existente
Route::put('/vehiculos/{id}', [VehiculoController::class, 'update'])->name('vehiculos.update');

// Ruta para eliminar un vehículo
Route::delete('/vehiculos/{id}', [VehiculoController::class, 'destroy'])->name('vehiculos.destroy');
