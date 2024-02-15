<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/estilos/banners',function () {
    return view('estilos.banners');
});
Route::get('/tarjetas', function () {
    return view('layouts.componentes.tarjetas');
});

