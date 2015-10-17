<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idServico')->unsigned();
            $table->bigInteger('idUser')->unsigned();
            $table->bigInteger('idComentario')->unsigned()->nullable();
            $table->string('descricao', 200);
            $table->integer('avaliacao')->nullable();

            $table->foreign('idServico')->references('id')->on('servicos');
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idComentario')->references('id')->on('comentarios');
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
        Schema::drop('comentarios');
    }
}
