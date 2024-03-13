<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/css/fontawesome/css/fontawesome.min.css"/>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @section("main")
        @if (isset($main))
            {{$main}}
        @endif
        @show
        @include('layouts.components.error_modal')
        @include('layouts.components.loading_modal')
        <div wire:loading.delay.flex id='idsContenedor' class="lds-contenedor"
            style="display: none">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
</body>
