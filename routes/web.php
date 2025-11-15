<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspaciosController;
use App\Http\Controllers\ReservasController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('espacios', EspaciosController::class);
Route::resource('reservas', ReservasController::class);
