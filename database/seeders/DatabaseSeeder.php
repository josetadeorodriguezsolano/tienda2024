<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //orden en que se debe ejecutar  (no se puede tener productos sin categorias)
        $this->call([CategoriaSeeder::class,ProductoSeeder::class]);
=======
        $this->call([
            CategoriasSeeder::class,
            ProductosSeeder::class,
<<<<<<< HEAD
    ]);
=======
        ]);
>>>>>>> origin/main
>>>>>>> origin/main
    }
}
