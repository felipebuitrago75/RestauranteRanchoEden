<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndicadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicador', function (Blueprint $table) {
            $table->integer('id_indicador');
            $table->string('fecha');
            $table->string('nombre');
            $table->string('responsable');
            $table->integer('tarea_id_tarea');
            $table->integer('usuario_idUsuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('indicador');
    }
}
