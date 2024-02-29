@extends('layouts.plantilla')
@section('titulo','Alta Productos')
@section('main')
    <main>
        <form method="post" action="alta" enctype="multipart/form-data">
            <h3>Alta de Productos</h3>
            @csrf
            @if ($errors->any())
                <span class="error">
                    {{$errors->first()}}
                </span><br>
            @endif
            <label for='nombre'>Nombre:</label>
            <input
            type="text"
            name="nombre"
            value="{{old('nombre')}}"
            />
            <br>
            <label for="categoria">Categoria:</label>
            <select name="categoria">
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">
                        {{$categoria->nombre}}</option>
                @endforeach
            </select><br>
            <label for="precio">Precio:</label>
            <input
            type="number"
            min="1"
            max="9999"
            name="precio"
            value="{{old('precio')}}"
            />
            <br>
            <label for="descripcion">Descripcion:</label><br>
            <textarea name="descripcion" cols="50" rows="5">
                {{old('descripcion')}}
            </textarea><br>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen"><br>
            <input type="submit" value="Guardar">
        </form>
    </main>
@endsection
