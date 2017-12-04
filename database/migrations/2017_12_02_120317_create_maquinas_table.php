<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaquinasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nroSerie');
            $table->integer('tipo_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipo_id')->references('id')->on('tipo_maquinas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('maquinas');
    }
}
