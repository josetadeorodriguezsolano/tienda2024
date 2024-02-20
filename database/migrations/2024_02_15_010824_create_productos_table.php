<?php
/*php artisan make:migration create_productos_table  COMANDO PARA ESTE ARCHIVOS PARAA CONSOLA*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {                   /*nombres de las tablas en prural*/
        Schema::create('productos', function (Blueprint $table) {
            $table->id();/*AUTOINCREMENTO*/
            $table->string("nombre",200);//255 caracteres
            $table->text("descripcion");
            $table->foreignId("categoria_id")->references('id')->on("categorias");
            $table->unsignedDouble("precio");
            $table->timestamps();/*AUTOLLENADO (CUANDO INICIA Y CUANDO TERMINA)*/
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
