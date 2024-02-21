@extends('layouts.plantilla')
@section('titulo','inputs')
@section('main')
    <div class="inputs">
        Tipos de Input - Applicaciones Web
    </div>
<form id="inputForm">
    <div class="inputs">
         Ingresa tu NOMBRE:
    </div>
    <input type="text" name="nombre" placeholder="Nombre">

    <div class="inputs">
         Ingresa tu CONTRASEÑA:
    </div>
    <input type="password" name="contraseña" placeholder="Contraseña">

    <div class="inputs">
         Selecciona tu edad:
    </div>
    <input type="number" name="edad" min="18" max="100" placeholder="Edad">

    <div class="inputs">
         Ingresa tu Email:
    </div>
    <input type="email" name="correo" placeholder="Correo Electrónico">

    <div class="inputs">
         Fecha de Nacimiento:
    </div>
    <input type="date" name="fecha_nacimiento">

    <div class="inputs">
        Subir Archivo:
    </div>
    <input type="file" name="archivo">
    <div class="inputs">
        ¿Qué es mejor?

    </div>
    <input type="radio" name="genero" value="masculino"> Perro
    <input type="radio" name="genero" value="femenino"> Gato
    <div class="inputs">
        Género Musical Favorito:
    </div>
    <input type="checkbox" name="intereses[]" value="deportes"> Clásica
    <input type="checkbox" name="intereses[]" value="lectura"> Electrónica
    <input type="checkbox" name="intereses[]" value="viajes"> City Pop Music
    <div class="inputs">
        ¿Estás de acuerdo?
    </div>
    <input type="button" value="Enviar" onclick="enviarFormulario()">
    <div class="inputs">
    </div>
    <input type="hidden" name="id_usuario" value="123">
</form>









