
@extends('layouts.plantilla')
@section('titulo','tarjetas')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@section('main')
    @vite(['resources/sass/global/tarjetas.scss', 'resources/js/app.js'])
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
            Hola, soy Michelle
            Hola, soy Fernando
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
        <section id="tarjeta01">
            <div class="tarjeta">
                <div class="imgTarjeta">
                    <img class="imgTarjeta" src="img/producto1.webp" alt="Producto">
                </div>
                <div class="contenidoTarjeta">
                    <p class="tituloTarjeta" title="HP Laptop PC 15s-fq5021sa | Intel Core i5-1235U Processor | 8GB RAM | 256GB SSD | Intel UHD Graphics | Windows 11 Home | Natural Silver">HP Laptop PC 15s-fq5021sa | Intel Core i5-1235U Processor | 8GB RAM | 256GB SSD | Intel UHD Graphics | Windows 11 Home | Natural Silver</p>
                    <br><span class="precioTarjeta">MX$5,999.00</span>
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
    </section>
    <section id="comentarios">
        Comentarios
    </section>
    <section id="recientes">
        Recientes
    </section>
    <section id="suscribirse">
        Suscribirse
    </section>
    <footer>
        Pie de pagina
    </footer>
</body>
</html>
