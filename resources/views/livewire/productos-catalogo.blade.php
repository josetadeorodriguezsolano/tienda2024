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
                    <td>@error('nombre') <span class="error">{{ $message }}</span> @enderror
                        <input type="text" wire:model='nombre'></td>
                    <td>@error('categoria_id') <span class="error">{{ $message }}</span> @enderror
                        <select wire:model='categoria_id'>
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}"
                                    @if ($categoria->id==$producto->categoria_id)
                                        selected
                                    @endif
                                    >
                                    {{$categoria->nombre}}</option>
                            @endforeach
                        </select></td>
                    <td>@error('descripcion') <span class="error">{{ $message }}</span> @enderror
                        <textarea cols="50" rows="5" wire:model="descripcion">
                        </textarea>
                    </td>
                    <td>@error('precio') <span class="error">{{ $message }}</span> @enderror
                        <input type="number" wire:model="precio"/></td>
                    <td>{{$producto->imagen}}</td>
                    <td><i wire:click='guardar()' class="fa-solid fa-check"></i>
                        <i wire:click='cancelar()' class="fa-solid fa-ban"></i></td>
                @else
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->categoria->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->imagen}}</td>
                    <td><i wire:click='editar({{$producto->id}})' class="fa-solid fa-pen-to-square"></i>
                        <i wire:click='eliminar({{$producto->id}})' class="fa-solid fa-trash"></i></td>
                @endif
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
