@extends('layouts.plantilla')
@section('titulo','Textos')
@section('main')
    <main>
        <form method="post" action="./productos/alta" enctype="multipart/form-data">
            @csrf
            <label for='nombre'>Nombre:</label>
            <input type="text" name="nombre"/>
            <label for="categoria">Categoria:</label>
            <select name="categoria">
                @foreach ($categotias as $categoria)
                    <option value="{{$categoria->id}}">
                        {{$categoria->nombre}}</option>
                @endforeach
            </select>
            <label for="precio">Precio:</label>
            <input type="number" name="precio"/>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen">
            <input type="submit" value="Guardar">
        </form>
    </main>
