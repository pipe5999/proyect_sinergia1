<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table-> bigIncrements('id');
            $table-> string('tipo_documento');
            $table-> string('numero_documento');
            $table-> string('nombre_1');
            $table-> string('nombre_2');
            $table-> string('apellido_1');
            $table-> string('apellido_2');
            $table-> string('genero_id');
            $table->integer('departamento_id');
            $table->integer('municipio_id');
            
            
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
        Schema::dropIfExists('users');
    }
};
