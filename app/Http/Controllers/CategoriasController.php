<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    //



    public function showAll()
    {
        return Categoria::all();
    }
}
