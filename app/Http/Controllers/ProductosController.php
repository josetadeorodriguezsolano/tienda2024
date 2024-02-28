<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function formAlta()
    {
        $categorias = Categoria::all();
        return view("alta_producto",["categorias"=>$categorias]);
    }

    public function alta(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->categoria_id = $request->categoria;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = "";
        $producto->save();
        $request->file('imagen')
            ->storeAs('productos', $producto->id.".jpg","public");
        $producto->imagen = "storage/productos/".$producto->id.".jpg";
        $producto->save();
    }
}
