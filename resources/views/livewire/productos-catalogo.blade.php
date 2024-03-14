<div class="tabla-condensada">
    <br>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                @if ($id_editando == $producto->id)
                    <td><input type="text" wire:model='nombre'></td>
                    <td><select wire:model='categoria_id'>
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}"
                                    @if ($categoria->id==$producto->categoria_id)
                                        selected
                                    @endif
                                    >
                                    {{$categoria->nombre}}</option>
                            @endforeach
                        </select></td>
                    <td><textarea cols="50" rows="5" wire:model="descripcion">
                        </textarea>
                    </td>
                    <td><input type="number" wire:model="precio"/></td>
                    <td>{{$producto->imagen}}</td>
                @else
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->categoria->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->imagen}}</td>
                    <td><button wire:click='editar({{$producto->id}})' class="fa-solid fa-pen-to-square">Editar</button>
                        <button wire:click='eliminar({{$producto->id}})' class="fa-solid fa-trash">Eliminar</button></td>
                @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
