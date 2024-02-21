<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
>>>>>>> origin/main

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD

        Categoria::factory()
        ->count(20)
        ->create();

=======
        //Categoria::truncate();
        Categoria::factory()
            ->count(20)
            ->create();
>>>>>>> origin/main
    }
}
