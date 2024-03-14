<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pais;
use Illuminate\Database\Eloquent\Collection;

class CiudadNacimiento extends Component
{
    public $paises;
    public $pais_id;
    public $estados;
    public $estado_id;
    public $municipios;
    public $municipio_id;
    public $ciudades;
    public $ciudad_id;

    public function mount()
    {
        $this->paises = Pais::all()->sortBy('nombre')->keyBy('id');
        $this->pais_id = 0;
        $this->estados = new Collection();
        $this->estado_id = 0;
        $this->municipios = new Collection();
        $this->municipio_id = 0;
        $this->ciudades = new Collection();
        $this->ciudad_id = 0;
    }

    public function render()
    {
        return view('livewire.ciudad-nacimiento');
    }

    public function changePais()
    {
        $this->estados = $this->paises[$this->pais_id]
            ->estados->sortBy('nombre')->keyBy('id');
        $this->estado_id = 0;
        $this->municipios = new Collection();
        $this->municipio_id = 0;
        $this->ciudades = new Collection();
        $this->ciudad_id = 0;
    }

    public function changeEstado()
    {
        $this->municipios = $this->estados[$this->estado_id]
            ->municipios->sortBy('nombre')->keyBy('id');
        $this->municipio_id = 0;
        $this->ciudades = new Collection();
        $this->ciudad_id = 0;
    }

    public function changeMunicipio(){
        $this->ciudades = $this->municipios[$this->municipio_id]
            ->ciudades->sortBy('nombre')->keyBy('id');
        $this->ciudad_id = 0;
    }
}
