<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.plantilla');
});

Route::get('/estilos/banners',function () {
    return view('estilos.banners');
});
