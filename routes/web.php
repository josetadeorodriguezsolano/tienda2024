<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get      ('/',[PrincipalController::class, 'paginaPrincipal'])
->name('principal');

Route::prefix('users')->controller(UsersController::class)
    ->group(function(){
        Route::get('/log','vistaLogin');
        Route::post('login','login');
    });

Route::prefix('productos')->controller(ProductosController::class)
    ->group(function(){
        Route::get('formAlta','formAlta');
        Route::post('alta','alta');
    });







Route::get('/estilos/banners',function () {
    return view('estilos.banners');
});
Route::get('/footer',function () {
    return view('layouts.componentes.footer');
});
