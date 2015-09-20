<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosHasTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos_has_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idServico')->unsigned();
            $table->bigInteger('idTag')->unsigned();

            $table->foreign('IdServico')->references('id')->on('servicos');
            $table->foreign('IdTag')->references('id')->on('tags');
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
        Schema::drop('servicos_has_tags');
    }
}
