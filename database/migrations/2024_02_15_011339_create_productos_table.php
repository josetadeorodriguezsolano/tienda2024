<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //laravel.com/docs/database/migration -> ver los tipos de datos
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",200);
            $table->foreignId("categoria_id")->references('id')->on('categorias');
            $table->text("descripcion");
            $table->unsignedDouble("precio");
            $table->timestamps();//Campos que se llenan solos
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
