<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients', [ClienteController::class, 'index'])
     ->name('cliente.index');