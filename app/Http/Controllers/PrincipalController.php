<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public static function paginaPrincipal(){
        $categoria = Categoria::buscarPorNombre('gamers');
        $categoria->productos[0]
        return view('principal', ['productos' => $categoria -> productos]);
    }
}
