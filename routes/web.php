<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PrincipalController::class, 'paginaPrincipal']);

Route::get('/estilos/banners',function () {
    return view('estilos.banners');
});
Route::get('/footer',function () {
    return view('layouts.componentes.footer');
});
