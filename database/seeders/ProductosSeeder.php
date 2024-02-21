<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::factory()
<<<<<<< HEAD
        ->count(1000)
        ->create();
=======
            ->count(1000)
            ->create();
>>>>>>> origin/main
    }
}
