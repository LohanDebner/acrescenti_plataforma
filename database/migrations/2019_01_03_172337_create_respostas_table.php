<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Respostas',function(Blueprint $table){
            $table->increments('id');
            $table->string('Valor'); 
            $table->integer('RespostaCorreta');      
            $table->integer('conteudo_id')->unsigned();	
            $table->foreign('conteudo_id')->references('id')->on('Conteudos');
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
        Schema::dropIfExists('Respostas');
    }
}

