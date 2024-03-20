<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;
use App\Models\Categoria;

class PrincipalController extends Controller
{
    public static function paginaPrincipal()
    {
        $categoria =  Categoria::buscarPorNombre('gamers');
        //dump($categoria->productos);
        //return "";
        //return view('principal',['productos'=>$categoria->productos]);
        return view('principal',['productos'=>$categoria->productosPaginados()]);
    }
    public function categoriabus()
    {
        return Categoria::take(20)->get();
    }

    public function productoscategoria($categoriaid)
    {
        return Producto::where('categoria_id',$categoriaid)->take(10)->get();
    }
    public function produ($productoid)
    {
        return Producto::where('id',$productoid)->get();
    }
}
