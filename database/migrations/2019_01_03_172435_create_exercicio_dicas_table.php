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
        Schema::create('Exercicio_Dicas',function(Blueprint $table){
            $table->increments('ID');
            $table->string('Descricao');       
            $table->integer('ConteudoID')->unsigned();	
            $table->foreign('ConteudoID')->references('ID')->on('Conteudos');
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
        Schema::dropIfExists('ExercicioDicas');
    }
}
