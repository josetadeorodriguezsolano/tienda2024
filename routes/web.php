<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/estilos/banners',function () {
    return view('estilos.banners');
});

// Inputs Alan
Route::get('/estilos/inputs',function () {
    return view('estilos.inputs');
});
