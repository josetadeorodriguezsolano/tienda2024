<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;

class ProductosCatalogo extends Component
{
    protected $productos;
    public $id_editando;

    public function mount(){
        $this->productos=Producto::paginate();
    }
    public function render()
    {
        return view('livewire.productos-catalogo',
        ['productos'=>$this->productos])
        ->layout('layout.plantilla')
        ->slot('main');
    }
}
