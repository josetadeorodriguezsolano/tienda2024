<?php
//CREAR UNA TABLA
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //renombrar                         Blueprint->PLANOS de esquemas
        Schema::table('productos', function (Blueprint $table) {
           //$table->renameColumn('categoria_id', 'cat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //renombrar lo mismo que arriba pero al reves
        Schema::table('productos', function (Blueprint $table) {
           // $table->renameColumn('cat', 'categoria_id');
        });
    }
};
