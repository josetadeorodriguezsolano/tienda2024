<!--Referencia del diseño-->
<!--https://jonathanvelez.com/que-es-header-de-una-pagina-web/-->
<!--https://esferacreativa.com/header-de-una-pagina-web/-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
    <header>
        <a href="" class="logo">TIENDA</a>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicio</a></li>
                <li><a href="#">Portafolio</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <section class="zona1"></section>
    <div>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eos impedit,
        libero doloribus numquam aspernatur veritatis, corporis fugiat nesciunt quia rem repellat
        quo ratione eum dolorem repellendus debitis hic saepe!<br>

        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eos impedit,
        libero doloribus numquam aspernatur veritatis, corporis fugiat nesciunt quia rem repellat
        quo ratione eum dolorem repellendus debitis hic saepe!<br>

        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eos impedit,
        libero doloribus numquam aspernatur veritatis, corporis fugiat nesciunt quia rem repellat
        quo ratione eum dolorem repellendus debitis hic saepe!
    </div>
    <script type="text/javascript"text>
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("abajo", window.scrollY>0)
        })
    </script>
</body>
</html>
