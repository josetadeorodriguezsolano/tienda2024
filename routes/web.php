<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;
use PrincipalController

Route::get('/',[PrincipalController::class,'principal']);

Route::prefix('productos')->controller(ProductosController::class)
    ->group(function(){
        Route::get('formAlta','formAlta');
        Route::post('alta','alta');
        Route::get('show10','show10');
    });






Route::get('/estilos/banners',function () {
    return view('estilos.banners');
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

