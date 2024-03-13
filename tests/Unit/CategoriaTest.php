<?php

namespace Tests\Unit;

use App\Models\Categoria;
use App\Models\Producto;
use Database\Factories\CategoriaFactory;
use Tests\TestCase;

class CategoriaTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_productos(): void
    {
        $categoria = Categoria::factory()
        ->count(1)
        ->make()->first();
        $categoria->save();
        $producto = Producto::factory()->count(1)->make()->first();
        $producto->categoria_id = $categoria->id;
        $producto->save();
        $this->assertTrue($categoria->productos()->count()==1);
    }
}
