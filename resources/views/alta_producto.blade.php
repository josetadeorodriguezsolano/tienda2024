@extends('layouts.plantilla')
@section('titulo','Textos')
@section('main')
    <main>
        <form method="post" action="alta" enctype="multipart/form-data">
            <h3>Alta de Productos</h3>
            @csrf
            <label for='nombre'>Nombre:</label>
            <input type="text"  name="nombre"/><br>
            <label for="categoria">Categoria:</label>
            <select name="categoria">
                @foreach ($categotias as $categoria)
                    <option value="{{$categoria->id}}">
                        {{$categoria->nombre}}</option>
                @endforeach
            </select>
            <label for="precio">Precio:</label>
            <input type="number" min="1" max="9999" name="precio"/><br>
            <label for="descripcion">Descripcion:</label><br>
            <textarea name="descripcion" cols="50" rows="5">
            </textarea><br>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen">
            <input type="submit" value="Guardar">
        </form>
    </main>
@endsection
