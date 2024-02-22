<?php

namespace Database\Factories;

use App\Models\Categoria;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;


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
         'nombre' => Fake()->name(),
         'categoria_id'=> Categoria::all()->random()->id,
         'descripcion' =>Fake()->paragraph(),
         'precio' =>Fake()->numberBetween(10,9999),
         "imagen" => Fake()->imageUrl(120,120,'producto',true),
        ];
    }
}
