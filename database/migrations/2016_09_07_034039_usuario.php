<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('idUsuario');
            $table->string('nombre');
            $table->string('email');
            $table->string('contraseña');
            $table->string('ciudad');
            $table->timestamps();
        });
    }
}
