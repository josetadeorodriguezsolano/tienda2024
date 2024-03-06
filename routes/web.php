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
Route::get('/footer',function () {
    return view('layouts.componentes.footer');
});
