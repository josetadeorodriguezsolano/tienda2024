<?php

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
        Schema::create('sucursales', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",200);//255 caracteres
            $table->string("Cuidad",50);
            $table->string("Pais",50);
            $table->string("cp",5);
            $table->string("gerente",50);
            $table->string("telefono",16);
         // $table->foreignId("empleado_id")->references('id')->on("empleados");
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucursales');
    }
};
