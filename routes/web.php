<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Tipos_financiamientos;
use App\Http\Controllers\Encabezado_solicitudes;
use App\Http\Controllers\Gestiones;

Route::get('/', [Clientes::class, 'index'])->name('clientes.index');
Route::get('/create', [Clientes::class, 'create'])->name('clientes.create');
Route::post('/store', [Clientes::class, 'store'])->name('clientes.store');
Route::get('/{id}/edit', [Clientes::class, 'edit'])->name('clientes.edit');
Route::put('/{id}/update', [Clientes::class, 'update'])->name('clientes.update');
Route::delete('/{id}/delete', [Clientes::class, 'destroy'])->name('clientes.destroy');


Route::get('/tipos_financiamientos', [Tipos_financiamientos::class, 'index'])->name('tipos_financiamientos.index');
Route::get('/tipos_financiamientos/create', [Tipos_financiamientos::class, 'create'])->name('tipos_financiamientos.create');
Route::post('/tipos_financiamientos/store', [Tipos_financiamientos::class, 'store'])->name('tipos_financiamientos.store');

Route::get('/encabezado_solicitudes', [Encabezado_solicitudes::class, 'index'])->name('encabezado_solicitudes.index');
Route::get('/encabezado_solicitudes/create', [Encabezado_solicitudes::class, 'create'])->name('encabezado_solicitudes.create');

Route::post('/encabezado_solicitudes/store', [Encabezado_solicitudes::class, 'store'] )->name('encabezado_solicitudes.store');

Route::delete('/encabezado_solicitudes/{id}/delete', [Encabezado_solicitudes::class, 'destroy'])->name('encabezado_solicitudes.destroy');

Route::get('/gestion_solicitudes/create/{id}', [Gestiones::class, 'create'])->name('gestion_solicitudes.create');
Route::post('/gestion_solicitudes/store', [Gestiones::class, 'store'])->name('gestion_solicitudes.store');