<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [PrincipalController::class, 'paginaPrincipal']);
Route::get('/',function () {
    return view('estilos.home');
});
