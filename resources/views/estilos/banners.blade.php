@extends('layouts.plantilla')
@section('titulo', 'Banners')

@section('main')
    <div class="banner">
        <div class="banner-content">
            <img src="{{ asset('img/mercadobanner.webp') }}" alt="BannerMercado">
            <img src="{{ asset('img/sitio-web-oficial-de-nike.jpg') }}" alt="BannerNike">
            <img src="{{ asset('img/Amazon_.jpg') }}" alt="BannerAmazon">
      <!-- Puedes añadir más elementos según sea necesario -->
        </div>
        <button class="prev-btn"><</button>
        <button class="next-btn">></button>
        <button class="btnBannerRedondo">HOLA</button>
    </div>

    @push('scripts')
    <script src="{{ asset('js/banner.js') }}"></script>