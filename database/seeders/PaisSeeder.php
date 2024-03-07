<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class paisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(base_path().'/database/sql/paises.sql'));
        DB::unprepared(file_get_contents(base_path().'/database/sql/estados.sql'));
        DB::unprepared(file_get_contents(base_path().'/database/sql/municipios.sql'));
        DB::unprepared(file_get_contents(base_path().'/database/sql/ciudades.sql'));
        //DB::unprepared(file_get_contents(base_path().'/database/sql/asentamientos.sql'));
        //DB::unprepared(file_get_contents(base_path().'/database/sql/localidades.sql'));
    }
}
