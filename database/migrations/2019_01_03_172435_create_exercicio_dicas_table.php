<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercicioDicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicio_dicas',function(Blueprint $table){
            $table->increments('id');
            $table->string('descricao');       
            $table->integer('conteudo_id')->unsigned();	
            $table->foreign('conteudo_id')->references('id')->on('Conteudos')->onDelete('cascade');
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
        Schema::dropIfExists('exercicio_dicas');
    }
}
