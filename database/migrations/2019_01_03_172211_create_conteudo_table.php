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
            $table->string('Titulo');
            $table->string('Origem');
            $table->string('Descricao');
            $table->integer('TipoConteudo');
            $table->integer('TipoExercicio');	
            $table->string('VideoPath');
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
