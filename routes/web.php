<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'paginaPrincipal']);
Route::prefix('productos')->controller(ProductosController::class)
    ->group(function(){
        Route::get('formAlta','formAlta');
        Route::post('alta','alta');
    });


// Route::get('/',function () {
//     return view('home');
// });
