<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpleadosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('cuit');
            $table->integer('telefono');
            $table->string('email');
            $table->string('domicilio');
            $table->integer('tipo_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipo_id')->references('id')->on('tipo_empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empleados');
    }
}
