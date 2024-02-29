@extends('layouts.plantilla')
@section('titulo', 'home')
@section('main')
<main>
<div id="navbar">
</div>
<div id="destacado">
    <img src="https://www.vhv.rs/dpng/f/233-2337534_cute-ulzzang-korean-girl-model-ulzzang-korean-girl.png">
    <h2>Winter Collection <b>2024</b></h2>
    <h1>Conoce nuestras mejores ofertas de <b>hasta un 30%</b></h1>
    <button id="comprar">Comprar ahora</button>
</div>
<section id="secciones">
    <div class="seccion">
        <div class="imagen">
            <img src="https://img.freepik.com/foto-gratis/retrato-hermosa-modelo-mujer-morena-caucasica-sonriente-ropa-elegante-verano-rosa-azul-brillante-aislado-sobre-fondo-blanco_158538-2940.jpg"
                alt="">
        </div>
        <div class="contenido">
            <h3>Mujer</h3>
            <i>
            </i>
        </div>
    </div>
    <div class="seccion">
        <div class="imagen">
            <img src="https://i.etsystatic.com/22551544/r/il/e6037e/4120971500/il_570xN.4120971500_83yb.jpg" alt="">
        </div>
        <div class="contenido">
            <h3>Accessorios</h3>
            <i>
            </i>
        </div>
    </div>
    <div class="seccion">
        <div class="imagen">
            <img src="https://www.looklet.com/hubfs/NEW-HenryTile2.jpg" alt="">
        </div>
        <div class="contenido">
            <h3>Hombre</h3>
            <i>
            </i>
        </div>
    </div>
</section>
<section id="articulos">
    <h1>Tendencia en videojuegos</h1>
    <div class="articulo-container">
        @if ($productos != null)
        @foreach ($productos as $producto)
        <div class="articulo">
            <img src="{{$producto->imagen}}">
            <div class="info">
                <div class="nombre">
                    <h3>{{ $producto->nombre }} </h3>
                </div>
                <p>MX$ {{ $producto->precio }}</p>
                <div class="butonTarjeta">
                    <img src="../img/carrito2.png">
                    AGREGAR
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</section>
</main>
@endsection
