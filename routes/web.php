<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\IntController;


Route::get('/', [TeamController::class, 'equipos.index'])->name('equipos.index');


Route::get('/equipos', [TeamController::class, 'index'])->name('equipos.index');
Route::get('/equipos/create', [TeamController::class, 'create'])->name('equipos.create');
Route::post('/equipos', [TeamController::class, 'store'])->name('equipos.store');
Route::get('/equipos/{id}/edit', [TeamController::class, 'edit'])->name('equipos.edit');
Route::put('/equipos/{id}', [TeamController::class, 'update'])->name('equipos.update');
Route::delete('/equipos/{id}', [TeamController::class, 'destroy'])->name('equipos.destroy');
Route::get('/', [TeamController::class, 'index'])->name('equipos.index');
Route::post('/equipos', [TeamController::class, 'store'])->name('equipos.store');
Route::delete('/equipos/{id}', [TeamController::class, 'destroy'])->name('equipos.destroy');


Route::get('/integrantes', [IntController::class, 'index'])->name('integrantes.index');
Route::get('/integrantes/create', [IntController::class, 'create'])->name('integrantes.create');
Route::post('/integrantes', [IntController::class, 'store'])->name('integrantes.store');
Route::get('/integrantes/{id}/edit', [IntController::class, 'edit'])->name('integrantes.edit');
Route::put('/integrantes/{id}', [IntController::class, 'update'])->name('integrantes.update');
Route::delete('/integrantes/{id}', [IntController::class, 'destroy'])->name('integrantes.destroy');
Route::get('/equipos/{name}/integrantes', [IntController::class, 'showIntegrantes'])->name('integrantes.equipo');
Route::post('/integrantes', [IntController::class, 'store'])->name('integrantes.store');
Route::get('/equipos/{name}/integrantes', [IntController::class, 'showIntegrantes'])->name('integrantes.equipo');
