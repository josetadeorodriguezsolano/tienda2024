<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\LoginMiddleware;
use App\Livewire\CiudadNacimiento;
use App\Livewire\ProductosCatalogo;
use Illuminate\Support\Facades\Route;

Route::get('nacimiento',function(){
    return view('ciudad_nacimiento');
});

Route::get('/',[PrincipalController::class, 'paginaPrincipal'])
->name('principal');

Route::prefix('users')->controller(UsersController::class)
    ->group(function(){
        Route::get('login','vistaLogin');
        Route::post('login','login');
    });

Route::prefix('producto')->controller(ProductosController::class)
    ->group(function(){
        Route::get('formAlta','formAlta')->name('altaProductos');
        Route::post('alta','alta');
    })->middleware('login');
Route::middleware(['login'])->get('/productos/formAlta',[ProductosController::class,'formAlta'])->name('altaProductos');

Route::prefix('productos')->controller(ProductosController::class)
    ->group(function(){
        Route::get('formAlta','formAlta');
        Route::post('alta','alta');
        Route::get('show10','show10');
    });

Route::get('productos/catalogo',ProductosCatalogo::class);






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

