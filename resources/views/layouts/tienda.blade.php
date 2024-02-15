<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @section("header")
        @include('layouts.componentes.header')
        @show
    @section("nav")
    @section("main")
        @show
    @section("aside")
    @section("footer")
        @include('layouts.componentes.footer')
        @show
</body>
