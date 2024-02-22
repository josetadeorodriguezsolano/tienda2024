@extends('layouts.plantilla')
@section('titulo','columnas')
@section('main')
    @vite(['resources/sass/global/columnas.scss', 'resources/js/app.js'])
        <div class="container">
    <div class="row">
      <div class="col-md-4 blanco">
        <h2>Columna 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
      </div>
      <div class="col-md-4 blanco">
        <h2>Columna 2</h2>
        <p>Phasellus tempus. Nullam dapibus vulputate massa. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
      </div>
      <div class="col-md-4 morado">
        <p>Nullam quis ante.</p>
        <p>---</p>
        <h2>Columna 3</h2>
        <p>Donec vitae sapien ut libero venenatis faucibus</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 custom-col gris-claro">
        <div class="marco-oscuro">
          <p>Vestibulum sem libero, vestibulum a justo vel, aliquam cursus erat. Morbi aliquam non quam vel luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </div>
      </div>
      <div class="col-md-6 custom-col gris-oscuro">
        <div class="marco-claro">
          <p>Suspendisse potenti. Donec tempor dapibus libero. Etiam at condimentum justo, nec pharetra magna. Cras vehicula nec ligula ut consequat. Nulla facilisi.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 custom-col lila">
        <div class="texto">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="col-md-3 custom-col lila">
        <div class="texto">
          <p>Phasellus tempus.</p>
        </div>
      </div>
      <div class="col-md-3 custom-col lila">
        <div class="texto">
          <p>Donec vitae sapien.</p>
        </div>
      </div>
      <div class="col-md-3 custom-col lila">
        <div class="texto">
          <p>Nullam quis ante.</p>
        </div>
      </div>
    </div>
  </div>