<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', [ PrincipalController::class, 'paginaPrincipal']);

Route::get('/estilos/banners',function () {
    return view('estilos.banners');
});

Route::get('/estilos/columnas',function () {
    return view('estilos.columnas');
});

Route::get('/estilos/loading',function () {
    return view('estilos.loading');
});
// Inputs Alan
Route::get('/estilos/inputs',function () {
    return view('estilos.inputs');
});
Route::get('/tarjetas', function () {
    return view('layouts.componentes.tarjetas');
});

