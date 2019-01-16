<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Conteudo;
use App\Respostas;
use App\ExercicioDicas;

class ConteudoController extends Controller
{
    public function index()
    {
        $conteudo = Conteudo::all();


        return view('conteudo.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $conteudo = new Conteudo();
        $conteudo->Titulo = request('Titulo');
        $conteudo->Origem = request('Origem');
        $conteudo->Descricao = request('Descricao');
        $conteudo->TipoConteudo = request('TipoConteudo');
        $conteudo->TipoExercicio = request('TipoExercicio');
        
        if($conteudo->TipoConteudo!='1'){
            $conteudo->VideoPath = request('VideoPath');
        } else{
            $conteudo->VideoPath = "";
        }

        $conteudo->save();


        if($conteudo->TipoConteudo == "1"){

            if($conteudo->TipoExercicio == "1"){
                // Salvando Respostas Alternativas
                $QuantidadeRespostas = request('QuantidadeRespostas');
                for($i=1;$i<=$QuantidadeRespostas;$i++)
                {
                    if(request('Resposta'.$i) !== NULL)
                    {
                        $resposta = new Respostas();
                        $resposta->valor = request('Resposta'.$i);
                        
                        //Se a resposta retornou algum valor, quer dizer que ela foi checada
                        if(request('checkResposta'.$i) == '1'){
                            $resposta->RespostaCorreta = "1";
                        } else{
                            $resposta->RespostaCorreta = "0";
                        }
                        
                        $resposta->ConteudoID = $conteudo->id;                        
                        $resposta->save();
                    }
                }
            } else{
                //Salvando Resposta Dissertativa
                $resposta = new Respostas();
                $resposta->valor = request('RespostaDissertativa');
                $resposta->RespostaCorreta = "1";
                $resposta->ConteudoID = $conteudo->id;                        
                $resposta->save();
            }               
        }

        // Salvando Dicas
        $QuantidadeDicas = request('QuantidadeDicas');
        for($i=1;$i<=$QuantidadeDicas;$i++)
        {
            if(request('Dica'.$i) !== NULL)
            {
                $dica = new ExercicioDicas();
                $dica->Descricao = request('Dica'.$i);
                $dica->ConteudoID = $conteudo->id;                        
                $dica->save();
            }
        }


        return redirect ('/conteudo');
       // dd(request()->all()); 
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
