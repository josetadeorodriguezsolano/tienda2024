<?php

namespace Database\Factories;

<<<<<<< HEAD
=======
use Doctrine\Inflector\Rules\Word;
>>>>>>> origin/main
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<<<<<<< HEAD

         'nombre' => fake()->Word(),


=======
            "nombre" => fake()->Word(),
>>>>>>> origin/main
        ];
    }
}
