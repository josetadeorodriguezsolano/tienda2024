<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
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

    public function alta(ProductoRequest $request)
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

    public function show10()
    {
        return Producto::take(10)->get();
    }
}
