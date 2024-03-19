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

    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'categoria_id' => 'required|exists:categorias,id',
            'precio' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required'
        ];
    }

    public function mount()
    {
    }

    public function render(){
        $this->productos = Producto::paginate();
        $this->categorias = Categoria::all();
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
        $producto = Producto::find($id);
        $producto->delete();
    }

    public function guardar(){
        $this->validate();
        $producto = Producto::find($this->id_editando);
        $producto->nombre = $this->nombre;
        $producto->descripcion = $this->descripcion;
        $producto->precio = $this->precio;
        $producto->categoria_id = $this->categoria_id;
        $producto->imagen = $this->imagen;
        $producto->save();
        $this->id_editando = 0;
    }

    public function cancelar(){
        $this->id_editando = 0;
    }
}
