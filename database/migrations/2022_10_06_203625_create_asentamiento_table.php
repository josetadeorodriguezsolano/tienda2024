<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsentamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asentamiento', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');

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
        Schema::dropIfExists('asentamiento');
    }
}
