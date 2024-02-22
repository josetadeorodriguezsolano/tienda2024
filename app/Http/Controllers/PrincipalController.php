<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class PrincipalController extends Controller
{
    public static function paginaPrincipal()
    {
        $categoria = Categoria::buscarPorNombre('gamers');
        //return view('principal', ['productos'=>$categoria->productos]);
        return view('principal',['productos'=>$categoria->productosPaginados()]);
    }

}
