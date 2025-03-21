<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VueloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vuelos', function () {
    return view('vuelos');
})->name('rvuelos');


Route::get('/buscar-vuelos', [VueloController::class, 'buscar']);

Route::get('vuelosbuscados',function(){

    return view('busquedahoteles');
})->name('buscavuelos');