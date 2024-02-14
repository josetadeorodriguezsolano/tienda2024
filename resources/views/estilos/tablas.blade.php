@extends('layouts.plantilla')

@section('header')
    @include('layouts.componentes.header')
@show


@section('nav')
@section('main')
@show


<section class="tabla-basica">
    <h1>Tabla básica</h1>
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>EDAD</th>
                <th>CIUDAD</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ANA</td>
                <td>25</td>
                <td>MADRID</td>
            </tr>
            <tr>
                <td>LUIS</td>
                <td>32</td>
                <td>BARCELONA</td>
            </tr>
            <tr>
                <td>MARÍA</td>
                <td>28</td>
                <td>SEVILLA</td>
            </tr>
        </tbody>
    </table>
</section>



<section class="tabla-condensada">
    <h1>Tabla condensada</h1>
    <table>
        <caption>Tabla condensada</caption>
        <thead>
            <tr>
                <th>Titulo 1</th>
                <th>Titulo 2</th>
                <th>Titulo 3</th>
            </tr>
        </thead>
        <tr>
            <td>Elemento 1,1</td>
            <td>Elemento 1,2</td>
            <td>Elemento 1,3</td>
        </tr>
        <tr>
            <td>Elemento 2,1</td>
            <td>Elemento 2,2</td>
            <td>Elemento 2,3</td>
        </tr>
        <tr>
            <td>Elemento 3,1</td>
            <td>Elemento 3,2</td>
            <td>Elemento 3,3</td>
        </tr>
        <tr>
            <td>Elemento 4,1</td>
            <td>Elemento 4,2</td>
            <td>Elemento 4,3</td>
        </tr>
        <tr>
            <td>Elemento 5,1</td>
            <td>Elemento 5,2</td>
            <td>Elemento 5,3</td>
        </tr>
    </table>
</section>





<section class="tabla-moderna">
    <h1>Tabla moderna</h1>



    <table>
        <caption>Información de empleados</caption>
        <thead>
            <th>Nombre</th>
            <th>Puesto</th>
            <th>E-mail</th>
        </thead>
        <tfoot>
            <tr>
                <td colspan=3>Lorem ipsum dolor sit amet.</td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <th>Robyn</th>
                <td>Escritor técnico</td>
                <td>robyn@example.com</td>
            </tr>
            <tr>
                <th>Mandy</th>
                <td>Technical Writer</td>
                <td>mandy@example.com</td>
            </tr>
            <tr>
                <th>Kate</th>
                <td>Economista</td>
                <td>kate@example.com</td>
            </tr>
            <tr>
                <th>Steven</th>
                <td>Auditor financiero</td>
                <td>steven@example.com</td>
            </tr>
            <tr>
                <th>Sophie</th>
                <td>Analista de riesgos</td>
                <td>sophie@example.com</td>
            </tr>
            <tr>
                <th>Ashur</th>
                <td>Adminsitrador de red</td>
                <td>ashur@example.com</td>
            </tr>
        </tbody>
    </table>
</section>

<section class="tabla-redondeada">
    <h1>Tabla redondeada</h1>


    <table>
        <caption>Vehiculos</caption>
        <thead>
            <tr>
                <th class="table_heading">Marca</th>
                <th class="table_heading">Modelo</th>
                <th class="table_heading">Año</th>
                <th class="table_heading">Precio</th>
            </tr>
        </thead>

        <tbody>
            <tr class="table_row">
                <td class="table_cell">
                    Audi
                </td>
                <td class="table_cell">
                    Q2 40 TFSL Line quattro
                </td>
                <td class="table_cell">
                    2019
                </td>
                <td class="table_cell">
                    464, 900.00MXN
                </td>
            </tr>


            <tr class="table_row">
                <td class="table_cell">
                    Nissan
                </td>
                <td class="table_cell">
                    Sentra
                </td>
                <td class="table_cell">
                    2023
                </td>
                <td class="table_cell">
                    350,000.00MXN
                </td>
            </tr>


            <tr class="table_row">
                <td class="table_cell">
                    MG
                </td>
                <td class="table_cell">
                    HS
                </td>
                <td class="table_cell">
                    2023
                </td>
                <td class="table_cell">
                    485,000.000MXN
                </td>
            </tr>


            <tr class="table_row">
                <td class="table_cell">
                    Chevrolet
                </td>
                <td class="table_cell">
                    Camaro
                </td>
                <td class="table_cell">
                    2021
                </td>
                <td class="table_cell">
                    1,200,000.00MXN
                </td>
            </tr>


        </tbody>
    </table>
</section>





<section class="tabla-separada">
    <h1>Tabla separada</h1>
    <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">Id</div>
          <div class="col col-2">Cliente</div>
          <div class="col col-3">Deuda</div>
          <div class="col col-4">Estado</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id">42235</div>
          <div class="col col-2" data-label="Customer Name">John Doe</div>
          <div class="col col-3" data-label="Amount">$350</div>
          <div class="col col-4" data-label="Payment Status">Pendiente</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id">42442</div>
          <div class="col col-2" data-label="Customer Name">Jennifer Smith</div>
          <div class="col col-3" data-label="Amount">$220</div>
          <div class="col col-4" data-label="Payment Status">Pendiente</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id">42257</div>
          <div class="col col-2" data-label="Customer Name">John Smith</div>
          <div class="col col-3" data-label="Amount">$341</div>
          <div class="col col-4" data-label="Payment Status">Pendiente</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Job Id">42311</div>
          <div class="col col-2" data-label="Customer Name">John Carpenter</div>
          <div class="col col-3" data-label="Amount">$115</div>
          <div class="col col-4" data-label="Payment Status">Pendiente</div>
        </li>
      </ul>
</section>





@section('aside')
@section('footer')
    @include('layouts.componentes.footer')
@show


