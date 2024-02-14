<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/estilos/banners',function () {
    return view('estilos.banners');
});


Route::get('/estilos/tablas',function () {
    return view('estilos.tablas');
});
