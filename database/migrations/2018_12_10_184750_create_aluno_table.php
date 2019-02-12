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
            $table->string('nome');
            $table->string('cpf')->unique();                   
            $table->string('rg')->unique();
            $table->string('emissor_rg');
            $table->integer('sexo');
            $table->datetime('data_nascimento');
            $table->string('telefone_1');
            $table->string('telefone_2');
            $table->string('telefone_3');
            $table->string('email');
            $table->string('cep');
            $table->string('endereco');
            $table->string('endereco_num');
            $table->string('endereco_comp');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->datetime('data_ingresso');
            $table->integer('possui_responsavel');
            $table->string('nome_responsavel');
            $table->string('cpf_responsavel');  
            $table->string('status_aluno');      
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
        Schema::dropIfExists('Alunos');
    }
}
