<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Categoria::truncate();    NO ME VA A DEJAR por que Productos depende de esta tabla
        Categoria::factory()
        ->count(20)
        ->create();
    }
}
