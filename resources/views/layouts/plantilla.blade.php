<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="popup" id="popup">
        <h2>¡Hola! Soy una ventana emergentge</h2>
        <button id="cerrarPopup">Ok</button>
    </div>

    <form id="formulario">
        <h2>Estilo Blume</h2>
        <h4>Blume ha ganado popularidad como marca de cuidado de la piel y cuidado personal conocida por su compromiso con el uso de ingredientes limpios y naturales.</h4>
        <input type="text" id="nombreCompleto" placeholder="Nombre completo">
        <input type="email" id="correoElectronico" placeholder="Correo electrónico">
        <button id="abrirPopup">Enviar datos</button>
    </form>
    <br>
    <h2>Estilo LightBox</h2>
    <h4>Cuando visitas una página web, a veces aparece un lightbox en la pantalla. Cubre el fondo e impide que puedas hacer clic en cualquier otra cosa. Cuando cierras la caja o haces algo en respuesta a ella, puedes volver a interactuar con la página web.</h4>
    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <img src="https://i.ebayimg.com/images/g/EQAAAOSw6ZtkYQWz/s-l1600.png" alt="Regalo">
            <input type="text" id="nombre" placeholder="Nombre">
            <input type="text" id="apellido" placeholder="Apellido">
            <button id="subscribirse">Suscribirse</button>
        </div>
    </div>

    <button id="abrirLightbox">Abrir Lightbox</button>
    <br>
    <h2>Estilo FullScreen</h2>
    <h4>Una ventana emergente a pantalla completa ocupa toda la pantalla del sitio web y aparece de repente. También forma parte de una interfaz gráfica de usuario.</h4>
    <div class="fullscreen-popup" id="fullscreenPopup">
        <div class="fullscreen-popup-content">
            <h1>Ventana Emergente</h1>
            <p>20% de Descuento</p>
            <form>
                <input type="text" id="nombre" placeholder="Nombre">
                <input type="email" id="correo" placeholder="Correo electrónico">
            </form>
            <button id="cerrarFullscreenPopup">Cerrar</button>
        </div>
    </div>

    <button id="abrirFullscreenPopup">Abrir</button>
    <script>
        document.getElementById('abrirPopup').addEventListener('click', function(event) {
            event.preventDefault(); // Evita que se envíe el formulario
            document.getElementById('popup').style.display = 'block';
        });

        document.getElementById('cerrarPopup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('nombreCompleto').value = '';
            document.getElementById('correoElectronico').value = '';
        });

        document.getElementById('abrirLightbox').addEventListener('click', function() {
            document.getElementById('lightbox').style.display = 'block';
        });

        document.getElementById('subscribirse').addEventListener('click', function() {
            document.getElementById('lightbox').style.display = 'none';
            document.getElementById('nombre').value = '';
            document.getElementById('apellido').value = '';
        });
        document.getElementById('abrirFullscreenPopup').addEventListener('click', function() {
        document.getElementById('fullscreenPopup').style.display = 'flex';
    });

    document.getElementById('cerrarFullscreenPopup').addEventListener('click', function() {
        document.getElementById('fullscreenPopup').style.display = 'none';
    });
    </script>
</body>
