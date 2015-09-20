<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idPerfil')->unsigned();
            $table->integer('idCompetencia')->unsigned();
            $table->string('titulo', 100);
            $table->string('descricao', 200);
            $table->string('duracao', 50)->nullable();

            $table->foreign('idPerfil')->references('id')->on('perfis');
            $table->foreign('idCompetencia')->references('id')->on('competencias');
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
        Schema::drop('servicos');
    }
}
