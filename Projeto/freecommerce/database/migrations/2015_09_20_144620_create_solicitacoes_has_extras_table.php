<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitacoesHasExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacoes_has_extras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idSolicitacao')->unsigned();
            $table->bigInteger('idExtra')->unsigned();

            $table->foreign('idSolicitacao')->references('id')->on('solicitacoes');
            $table->foreign('idExtra')->references('id')->on('extras');
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
        Schema::drop('solicitacoes_has_extras');
    }
}
