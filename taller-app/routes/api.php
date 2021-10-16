<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

/*CRUD*/
Route::get('/persona/mostrar', [PersonController::class, 'showAll']);
Route::post('/persona/insertar', [PersonController::class, 'insert']);
Route::put('/persona/actualizar', [PersonController::class, 'update']);
Route::delete('/persona/borrar', [PersonController::class, 'delete']);

/*otros endpoints*/
Route::get('/persona/{id}', [PersonController::class, 'show'])->where('id', '[0-9]');