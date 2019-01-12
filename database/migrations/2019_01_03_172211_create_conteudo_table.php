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
        Schema::create('Conteudo',function(Blueprint $table){
            $table->increments('ID');
            $table->string('Titulo');
            $table->string('Origem');
            $table->string('Descricao');
            $table->integer('TipoConteudo');
            $table->integer('TipoExercicio');
            $table->integer('RespostaID')->unsigned();	
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
        Schema::dropIfExists('Conteudo');
    }
}
