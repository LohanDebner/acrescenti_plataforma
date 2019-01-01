<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Alunos',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('Nome');
            $table->string('CPF')->unique();                   
            $table->string('RG')->unique();
            $table->string('EmissorRG');
            $table->integer('Sexo');
            $table->datetime('DataNascimento');
            $table->string('Telefone1');
            $table->string('Telefone2');
            $table->string('Telefone3');
            $table->string('Email');
            $table->string('CEP');
            $table->string('Endereco');
            $table->string('EnderecoNum');
            $table->string('EnderecoComp');
            $table->string('Bairro');
            $table->string('Cidade');
            $table->string('Estado');
            $table->datetime('DataIngresso');
            $table->string('NomeResponsavel');
            $table->string('CPFResponsavel');  
            $table->string('Status');      
<<<<<<< HEAD
            $table->timestamps();        
=======
            $table->timestamps();     
>>>>>>> 5b24123bbaf40a37d60e6ef0896e61d78c8dc69d
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Alunos');
    }
}
