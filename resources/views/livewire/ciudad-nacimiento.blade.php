<div>
    Pais:
    <select wire:model='pais_id' wire:change='changePais'>
        @foreach ($paises as $pais)
            <option value="{{$pais->id}}">{{$pais->nombre}}</option>
        @endforeach
    </select><br>
    Estado:
    <select wire:model='estado_id' wire:change='changeEstado'>
        @foreach ($estados as $estado)
            <option value="{{$estado->id}}">{{$estado->nombre}}</option>
        @endforeach
    </select><br>
    Municipio:
    <select wire:model='municipio_id' wire:change='changeMunicipio'>
        @foreach ($municipios as $municipio)
            <option value="{{$municipio->id}}">{{$municipio->nombre}}</option>
        @endforeach
    </select><br>
    Ciudad:
    <select wire:model='ciudad_id'>
        @foreach ($ciudades as $ciudad)
            <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
        @endforeach
    </select>
</div>
