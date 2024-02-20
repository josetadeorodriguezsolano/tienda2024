@extends('layouts.plantilla')
@section('titulo','columnas')
@section("header")
        @include('layouts.componentes.header')
        @show
    @section("nav")
    @section("main")
        @show
        <div class="container">
            <div class="columna-3">Columna 1</div>
            <div class="columna-3">Columna 2</div>
            <div class="columna-3">Columna 3</div>
        </div>
        <div class="container">
            <div class="columna-2">Columna 4</div>
            <div class="columna-2">Columna 5</div>
        </div>

    @section("aside")
    @section("footer")
        @include('layouts.componentes.footer')
        @show