<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/estilos/banners',function () {
    return view('estilos.banners');
});

Route::get('/estilos/imagenes',function () {
    return view('estilos.imagenes');
});
