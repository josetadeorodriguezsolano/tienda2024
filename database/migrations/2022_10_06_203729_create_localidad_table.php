<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localidad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('codigo_postal',5);
            $table->unsignedBigInteger('asentamiento_id');
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('ciudad_id');

            $table->foreign('municipio_id')->references('id')->on('municipio');
            $table->foreign('asentamiento_id')->references('id')->on('asentamiento');

            $table->engine = 'InnoDB';
            $table->charset = 'latin1';
            $table->collation = 'latin1_swedish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localidad');
    }
}
