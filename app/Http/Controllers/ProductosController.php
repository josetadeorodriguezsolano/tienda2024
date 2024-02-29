<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function formAlta(){
        $categorias = Categoria::all();
        return view("alta_producto",["categorias"=>$categorias]);
    }

    public function alta(ProductoRequest $request){
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->categorias_id = $request->categoria;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();
        $request->file("imagen")->storeAs("productos",$producto->id.".jpg");
        $producto->imagen = "storage/productos/".$producto->id.".jpg";
        $producto->save();
    }
}
