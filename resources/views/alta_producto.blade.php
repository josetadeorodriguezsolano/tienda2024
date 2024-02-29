@extends('layouts.plantilla')
@section('titulo', 'Alta productos')
@section('main')

    <main>
        <form method="POST" action="alta" enctype="multipart/form-data">
            @csrf

            <label for="">Nombre:</label>
            <input type="text" name="nombre" id=""> <br>
            <label for="categoria">Categoria:</label>
            <select name="categoria_id" id="">
                @foreach ($categorias as $perro)
                    <option value="{{ $perro->id }}">{{ $perro->nombre }}</option> <br>
                @endforeach
            </select>
            <br>
            <label for="precio">Precio:</label>
            <input type="number" min="0" max="9999" name="precio" id="precio"> <br>
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea> <br>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen"> <br>
            <input type="submit" value="Guardar">
        </form>

    </main>
