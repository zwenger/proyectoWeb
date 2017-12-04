<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdensTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->date('fechaEmision');
            $table->date('fechaVencimiento');
            $table->integer('maquina_id')->unsigned();
            $table->integer('empleado_id')->unsigned();
            $table->integer('tarea_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('maquina_id')->references('id')->on('maquinas');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('tarea_id')->references('id')->on('tareas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ordens');
    }
}
