<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'paginaPrincipal']);
Route::prefix('productos')->controller(ProductosController::class)
    ->group(function(){
        Route::get('formAlta','formAlta')->name('altaProductos');
        Route::post('alta','alta');
    })->middleware('login');
Route::prefix('users')->controller(UserController::class)
    ->group(function(){
        Route::get('login','vistaLogin');
        Route::post('login','login');
    });

// Route::get('/',function () {
//     return view('home');
// });
