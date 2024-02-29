<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public static function paginaPrincipal()
    {
        $categoria = Categoria::buscarPorNombre('gamers');
        return view('home',['productos' => $categoria -> productos]);
    }
}
