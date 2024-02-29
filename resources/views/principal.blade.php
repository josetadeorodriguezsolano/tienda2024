@extends('layouts.plantilla')
@section('titulo','Textos')
@section('main')
    <header id="encabezadoPrincipal">
        <img src="img/logo.jpg">
        Super Tienda en Linea
        <section id="carrito">
            1 productos - $1857.00
            <img src="img/carrito.webp">
        </section>
        <section id="cuenta">
            <button>Registrate</button>
            <button>Mi cuenta</button>
        </section>
        <section id="busqueda">
            <input type="text" id="txtBusqueda">
        </section>
        <section id="saludo">
        </section>
    </header>
    <nav>Barra de navegacion</nav>
    <section id="masBuscado">
        Categorias mas buscadas
    </section>
    <section id="anuncios">
        Anuncios
    </section>
    <section id="superOfertas">
        Super Ofertas
    </section>
    <section id="masVendido">
        Mas vendido
    </section>
    <section id="nuevo">
        Lo Nuevo
    </section>
    <section id="gamers">
        @if($productos!=null)
        @foreach($productos as $producto)
        <section id="tarjeta01">
            <div class="tarjeta">
                <div class="imgTarjeta">
                    <img class="imgTarjeta" src="{{$producto -> imagen}}" alt="Producto">
                </div>
                <div class="contenidoTarjeta">
                    <p class="{{$producto->nombre}}" title="{{$producto->nombre}}"></p>
                    <br><span class="precioTarjeta">MX$ {{$producto->precio}}</span>
                    <div class="detallesProducto">
                        <p>A 12 meses sin intereses de $399 <br>
                            Envío gratis
                        </p>
                        <div class="ratingTarjeta">
                            ★★★★☆
                        </div>
                    </div>
                </div>
                <div class="butonTarjeta">
                    <button>Agregar</button>
                </div>
            </div>
        </section>
        @endforeach
        @endif
@endsection
