<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConteudoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conteudos',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('titulo');
            $table->string('origem');
            $table->string('descricao');
            $table->integer('tipo_conteudo');
            $table->integer('tipo_exercicio');	
            $table->string('video_path');
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
        Schema::dropIfExists('Conteudos');
    }
}
