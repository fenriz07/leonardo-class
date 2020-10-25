<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('lugar');
            $table->string('cp');
            $table->string('nombre');
            $table->string('numero_productor');
            $table->integer('estado');
            $table->integer('tipo_fruta');
            $table->integer('cantidad');
            $table->text('buena');
            $table->text('pendiente');
            $table->integer('cantidad_rechazada');
            $table->integer('total_recibida');
            $table->string('encargado');
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
        Schema::dropIfExists('notas');
    }
}
