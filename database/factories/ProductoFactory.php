<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Categoria;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Eloquent\Factories\Factory;
=======
use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
use Illuminate\Support\Testing\Fakes\Fake;
use App\Models\Categoria;
>>>>>>> origin/main

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
<<<<<<< HEAD
            //id automatico
            'nombre'=>fake()->name(),
            'categoria_id'=>Categoria::all()->random()->id,
            'descripcion'=>fake()->paragraph(),
            'precio'=>fake()->numberBetween(0,9999),
            'imagen'=>fake()->imageUrl(120,120,'producto',true),//tamaño 120,120  nombre de la imagen o algo asi
=======
         'nombre' => Fake()->name(),
         'categoria_id'=> Categoria::all()->random()->id,
         'descripcion' =>Fake()->paragraph(),
         'precio' =>Fake()->numberBetween(10,9999),
         "imagen" => Fake()->imageUrl(120,120,'producto',true),
=======
use App\Models\Categoria;

class ProductoFactory extends Factory
{
    public function definition(): array
    {
        return [
            "nombre" => fake()->name(),
            "categoria_id" => Categoria::all()->random()->id,
            "descripcion" => fake()->paragraph(),
            "precio" => fake()->numberBetween(10, 9999),
            "imagen" => fake()->imageUrl(120, 120, 'producto', true),
>>>>>>> origin/main
>>>>>>> origin/main
        ];
    }
}
