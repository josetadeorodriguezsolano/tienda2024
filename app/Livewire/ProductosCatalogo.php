<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;
use App\Models\Categoria;

class ProductosCatalogo extends Component
{
    protected $productos;
    protected $categorias;
    public $id_editando = 0;
    public $nombre;
    public $categoria_id;
    public $descripcion;
    public $imagen;
    public $precio;
    public $refresh;

    public function mount()
    {
        $this->refresh = 0;
    }

    public function render(){
        $this->productos = Producto::paginate();
        $this->categorias = Categoria::all();
        $this->refresh++;
        return view('livewire.productos-catalogo',
        ['productos'=>$this->productos,
        'categorias'=>$this->categorias])
        ->layout('layouts.plantilla')
        ->slot('main');
    }

    public function editar($id){
        $this->id_editando = $id;
        $producto = Producto::find($id);
        $this->nombre = $producto->nombre;
        $this->descripcion = $producto->descripcion;
        $this->precio = $producto->precio;
        $this->categoria_id = $producto->categoria_id;
        $this->imagen = $producto->imagen;
    }

    public function eliminar($id){

    }
}
