<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

/*CRUD*/
Route::get('/persona/mostrar', [PersonController::class, 'showAll']);
Route::post('/persona/insertar', [PersonController::class, 'insert']);
Route::put('/persona/actualizar/{id}', [PersonController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/persona/borrar/{id}', [PersonController::class, 'delete'])->where('id', '[0-9]+');

/*otros endpoints*/
Route::get('/persona/{id}', [PersonController::class, 'show'])->where('id', '[0-9]+');