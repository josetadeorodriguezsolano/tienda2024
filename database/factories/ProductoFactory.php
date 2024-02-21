<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    public function definition(): array
    {
        return [
            "nombre" => fake()->name(),
            "categorias_id" => Categoria::all()->random()->id,
            "descripcion" => fake()->paragraph(),
            "precio" => fake()->numberBetween(10,9999),
            "imagen" => fake()->imageUrl(120,120, "producto", true),
        ];
    }
}
