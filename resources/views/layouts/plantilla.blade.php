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
<h1>Ventana Modal</h1>
<button id="btn-abrir-modal">Abrir</button>
<dialog id="modal">
<h2>Hola soy una ventana modal</>
<form>
	<button type="submit">Ok</button>
</form>
</dialog>

const btnOk = document.querySelector("btnOk");
const modal = document.querySelector("#modal");

btnAbrirModal.addEventListener("click",()=>{
modal.showModal();
})
btnOk.addEventListener("click",()=>{
modal.close();
})

</body>
