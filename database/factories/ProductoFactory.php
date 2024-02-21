<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;
=======
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;
>>>>>>> origin/main

class ProductoFactory extends Factory
{
    public function definition(): array
    {
        return [
            "nombre" => fake()->name(),
<<<<<<< HEAD
            "categorias_id" => Categoria::all()->random()->id,
            "descripcion" => fake()->paragraph(),
            "precio" => fake()->numberBetween(10,9999),
            "imagen" => fake()->imageUrl(120,120, "producto", true),
=======
            "categoria_id" => Categoria::all()->random()->id,
            "descripcion" => fake()->paragraph(),
            "precio" => fake()->numberBetween(10, 9999),
            "imagen" => fake()->imageUrl(120, 120, 'producto', true),
>>>>>>> origin/main
        ];
    }
}
