<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;

class ProductoFactory extends Factory
{
    public function definition(): array
    {
        return [
            "nombre" => fake()->name(),
            "categoria_id" => Categoria::all()->random()->id,
            "descripcion" => fake()->paragraph(),
            "precio" => fake()->numberBetween(10,9999),
            "imagen" => fake()->imageUrl(120,120, "producto", true),
        ];
    }
}
