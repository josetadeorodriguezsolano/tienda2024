<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('estilos.banners');
});

Route::get('/estilos/banners', function () {
    return view('estilos.banners');
});

