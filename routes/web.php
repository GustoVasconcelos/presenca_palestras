<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PalestraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
 return redirect()->route('eventos.index');
});
Route::resource('palestras', PalestraController::class);
Route::resource('eventos', EventoController::class);
Route::resource('Cursos', CursoController::class);