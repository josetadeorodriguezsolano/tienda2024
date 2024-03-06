@extends('layouts.plantilla')
@section('titulo','Alta Productos')
@section('main')
    <main>
        @if ($errors->any())
            <span class="error">
                {{ $errors->first()}}
            </span><br>
        @endif
        <form method="post" action="alta" enctype="multipart/form-data">
            <h3>Alta de Productos</h3>
            @csrf


            @if ($errors->any())
                <div style="border: 1px solid red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color:red;">{{$error}}</li>
                        @endforeach
                    </ul>
                </div>

            @endif

            <label for='nombre'>Nombre:</label>
            <input type="text"  name="nombre"
                value="{{old('nombre')}}"/><br>
            @if ($errors->has('nombre'))
                <span class="error">
                    {{ $errors->first('nombre') }}
                </span><br>
            @endif
            <label for="categoria">Categoria:</label>
            <select name="categoria" >
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}"
                        @if (old("categoria")==$categoria->id)
                            selected
                        @endif
                    >{{$categoria->nombre}}</option>
                @endforeach
            </select><br>
            <label for="precio">Precio:</label>
            <input type="number" value="{{old("precio")}}"
                 min="1" max="9999" name="precio"/><br>
            <label for="descripcion">Descripcion:</label><br>
            <textarea name="descripcion" cols="50" rows="5">
               {{old("descripcion")}}
            </textarea><br>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen"><br>
            <input type="submit" value="Guardar">
        </form>
    </main>

@endsection
