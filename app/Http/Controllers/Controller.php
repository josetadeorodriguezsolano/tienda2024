<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

class MiControlador extends Controller
{
    // Otros métodos del controlador

    public function miMetodo()
    {
        // Tu lógica para determinar si se está cargando algo o no
        $isLoading = true; // O false, dependiendo de tu lógica

        return view('loading', compact('isLoading'));
    }
    // Otros métodos del controlador
}
