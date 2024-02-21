<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "nombre" => fake()->Word(),
            "categoria_id" => Categoria::all()->random(),
            "descripcion" => fake()->paragraph(),
            "precio" => fake()->numberBetween(10,9999),
            "imagen" => fake()->imageUrl(120,120,'producto',true),

        ];
    }
}
