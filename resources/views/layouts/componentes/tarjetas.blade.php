@extends('layouts.plantilla')
@section('titulo','tarjetas')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@section('main')
    @vite(['resources/sass/global/tarjetas.scss', 'resources/js/app.js'])

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
<section id="tarjeta02">

    <div class="tarjeta">
        <div class="imgTarjeta">
            <img class="imgTarjeta" src="img/producto1.webp" alt="Producto">
        </div>
        <div class="butonTarjeta">
            <button>+ Agregar</button>
        </div>
        <p class="meses">Hasta 12 meses sin intereses</p><br>
        <div class="marca">HP </div>
        <div class="contenidoTarjeta">
            <br><span class="precioTarjeta">MX$5,999.00  </span><span class="preciOferta">$8,999.00</span>
            <div class="detallesProducto">
                <p>A 12 meses sin intereses de $399 <br>
                    Envío gratis
                </p>
                <p class="tituloTarjeta" title="Laptop PC 15s-fq5021sa | Intel Core i5-1235U Processor | 8GB RAM | 256GB SSD | Intel UHD Graphics | Windows 11 Home | Natural Silver">Laptop PC 15s-fq5021sa | Intel Core i5-1235U Processor | 8GB RAM | 256GB SSD | Intel UHD Graphics | Windows 11 Home | Natural Silver</p>
               <div class="ratingTarjeta">
                    ★★★☆☆

                </div>
            </div>
        </div>

    </div>
</section>
<section id="tarjeta03">
    <div class="tarjeta">
        <div class="imagenProducto">
          <img src="img/producto02.webp" alt="Dell Laptop">
        </div>
        <div class="infoProducto">
          <h2 class="tituloProducto" title="Latitude 7480 portátil empresarial de 14 pulgadas, 14 pulgadas HD antirreflectante, Intel Core i5-6300U de doble núcleo de 2,4 GHz, 16 GB DDR4, unidad de estado sólido de 256 GB, cámara web, Bluetooth, Windows 10Pro (Reacondicionado)">Latitude 7480 portátil empresarial de 14 pulgadas, 14 pulgadas HD antirreflectante, Intel Core i5-6300U de doble núcleo de 2,4 GHz, 16 GB DDR4, unidad de estado sólido de 256 GB, cámara web, Bluetooth, Windows 10Pro (Reacondicionado)</h2>
          <div class="calificacionProducto">
            <span class="rating">★★★★★</span>
            <span class="cantReview">376</span>
            <span class="vendido">100+ comprados el mes pasado</span>
          </div>
          <div class="precioProducto">
            $3,999.70
            <span class="infoCompra">Entrega GRATIS el lun, 19 de feb</span>
          </div>
          <div class="opcionAdicional">
            Más opciones de compra
            <span class="precioAdicional">$3,399.00 (7 ofertas nuevas)</span>
          </div>
        </div>
      </div>
</section>
<section id="tarjetaHorizontal">
    <div class="tarjeta">
        <div class="imagenProducto">
          <img src="img/producto02.webp" alt="HP Laptop">
        </div>
        <div class="infoProducto">
          <span class="descuento">40% OFF</span>
          <h2 class="tituloProducto" title="Latitude 7480 portátil empresarial de 14 pulgadas, 14 pulgadas HD antirreflectante, Intel Core i5-6300U de doble núcleo de 2,4 GHz, 16 GB DDR4, unidad de estado sólido de 256 GB, cámara web, Bluetooth, Windows 10Pro (Reacondicionado)">Latitude 7480 portátil empresarial de 14 pulgadas, 14 pulgadas HD antirreflectante, Intel Core i5-6300U de doble núcleo de 2,4 GHz, 16 GB DDR4, unidad de estado sólido de 256 GB, cámara web, Bluetooth, Windows 10Pro (Reacondicionado)</h2>
          <div class="calificacionProducto">
            <span class="rating">★★★★☆</span>
            <span class="cantReview">(76)</span>
          </div>
          <div class="precioProducto">
            <span class="precioTachado">$11,999</span>
            <span class="precioFinal">$7,199</span>
            <span class="infoCompra">en 12 meses sin intereses de $599</span>
          </div>
          <div class="envio">
            Envío gratis
            <span class="enviadoPor">Enviado por <strong>FULL</strong></span>
          </div>
        </div>
      </div>
</section>
