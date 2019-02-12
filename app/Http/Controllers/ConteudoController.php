<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Conteudo;
use App\Resposta;
use App\ExercicioDica;

class ConteudoController extends Controller
{
    public function index()
    {
        $conteudo = Conteudo::all();

        foreach ($conteudo as $item){

            switch ($item->tipo_conteudo){
                case 1:
                    $item->tipo_conteudo = "Exercicio";
                    break;
                case 2:
                    $item->tipo_conteudo = "Video Aula";
                    break;
                case 3:
                    $item->tipo_conteudo = "Vidio Exercicio";
                    break;
            }
        } 


        return view('conteudo.index',['conteudo'=>$conteudo]);
    }


    public function create()
    {
        return view('conteudo.create');
    }


    public function store(Request $request)
    {
        $conteudo = new Conteudo();
        $conteudo->titulo = request('titulo');
        $conteudo->origem = request('origem');
        $conteudo->descricao = request('descricao');
        $conteudo->tipo_conteudo = request('tipo_conteudo');
        $conteudo->tipo_exercicio = request('tipo_exercicio');
        
        if($conteudo->tipo_conteudo!='1'){
            $conteudo->video_path = request('video_path');
        } else{
            $conteudo->video_path = "";
        }

        $conteudo->save();


        if($conteudo->tipo_conteudo == "1"){

            if($conteudo->tipo_exercicio == "1"){
                // Salvando Respostas Alternativas
                $QuantidadeRespostas = request('QuantidadeRespostas');
                for($i=1;$i<=$QuantidadeRespostas;$i++)
                {
                    if(request('Resposta'.$i) !== NULL)
                    {
                        $respostas = new Resposta();
                        $respostas->valor = request('Resposta'.$i);
                        
                        //Se a resposta retornou algum valor, quer dizer que ela foi checada
                        if(request('checkResposta'.$i) == '1'){
                            $respostas->resposta_correta = "1";
                        } else{
                            $respostas->resposta_correta = "0";
                        }
                        
                        $respostas->conteudo_id = $conteudo->id;                        
                        $respostas->save();
                    }
                }
            } else{
                //Salvando Resposta Dissertativa
                $respostas = new Resposta();
                $respostas->valor = request('RespostaDissertativa');
                $respostas->resposta_correta = "1";
                $respostas->conteudo_id = $conteudo->id;                        
                $respostas->save();
            }               
        }

        // Salvando Dicas
        $QuantidadeDicas = request('QuantidadeDicas');
        for($i=1;$i<=$QuantidadeDicas;$i++)
        {
            if(request('Dica'.$i) !== NULL)
            {
                $dica = new ExercicioDica();
                $dica->descricao = request('Dica'.$i);
                $dica->conteudo_id = $conteudo->id;                        
                $dica->save();
            }
        }


        return redirect ('/conteudo');
       // dd(request()->all()); 
    }


    public function show($id)
    {
        $conteudo = Conteudo::findOrFail($id);       

        $dica = Conteudo::findOrFail($id)->dicas;
        

        return view('conteudo.show',compact('conteudo','dica'));

    }


    public function edit($id)
    {
        $conteudo = Conteudo::findOrFail($id);

    
        switch ($conteudo->tipo_conteudo){
            case 1:
                $conteudo->ConteudoExercicio = "selected";
                $conteudo->ConteudoVideoAula = "";
                $conteudo->ConteudoVideoExercicio = "";
                break;
            case 2:
                $conteudo->ConteudoExercicio = "";
                $conteudo->ConteudoVideoAula = "selected";
                $conteudo->ConteudoVideoExercicio = "";
                break;
            case 3:
                $conteudo->ConteudoExercicio = "";
                $conteudo->ConteudoVideoAula = "";
                $conteudo->ConteudoVideoExercicio = "selected";
                break;
        }
        
        switch ($conteudo->tipo_exercicio){
            case 1:
                $conteudo->TipoExercicioAlternativa = "selected";
                $conteudo->TipoExercicioDissertativa = "";
                break;
            case 2:
                $conteudo->TipoExercicioAlternativa = "";
                $conteudo->TipoExercicioDissertativa = "selected";
                break; 
        }   

        $resposta = Conteudo::findOrFail($id)->respostas;
        $dica = Conteudo::findOrFail($id)->dicas;
        
       return view ('conteudo.edit', compact('conteudo','resposta','dica'));

    }


    public function update(Request $request, $id)
    {
        $conteudo = Conteudo::find($id);

        $conteudo->tipo_conteudo = request('tipo_conteudo');
        $conteudo->titulo = request('titulo');
        $conteudo->origem = request ('origem');
        $conteudo->descricao = request ('descricao');
        $conteudo->tipo_exercicio = request('tipo_exercicio');

        $conteudo->respostas()->delete();
        $conteudo->dicas()->delete();

        if($conteudo->tipo_conteudo == "1"){

            if($conteudo->tipo_exercicio == "1"){
                // Salvando Respostas Alternativas
                $QuantidadeRespostas = request('QuantidadeRespostas');
                for($i=1;$i<=$QuantidadeRespostas;$i++)
                {
                    if(request('Resposta'.$i) !== NULL)
                    {
                        $respostas = new Resposta();
                        $respostas->valor = request('Resposta'.$i);
                        
                        //Se a resposta retornou algum valor, quer dizer que ela foi checada
                        if(request('checkResposta'.$i) == '1'){
                            $respostas->resposta_correta = "1";
                        } else{
                            $respostas->resposta_correta = "0";
                        }
                        
                        $respostas->conteudo_id = $conteudo->id;                        
                        $respostas->save();
                    }
                }
            } else{
                //Salvando Resposta Dissertativa
                $respostas = new Resposta();
                $respostas->valor = request('RespostaDissertativa');
                $respostas->resposta_correta = "1";
                $respostas->conteudo_id = $conteudo->id;                        
                $respostas->save();
            }               
        }

        // Salvando Dicas
        $QuantidadeDicas = request('QuantidadeDicas');
        for($i=1;$i<=$QuantidadeDicas;$i++)
        {
            if(request('Dica'.$i) !== NULL)
            {
                $dica = new ExercicioDica();
                $dica->descricao = request('Dica'.$i);
                $dica->conteudo_id = $conteudo->id;                        
                $dica->save();
            }
        }

        $conteudo->save();

        return redirect ('/conteudo');
    }


    public function destroy($id)
    {
        //$dica = App\ExercicioDica::destroy(['conteudo_id']);
        //$respostas = App\Resposta::destroy(['conteudo_id']);

        Conteudo::find($id)->delete();
        return redirect ('/conteudo'); 
    }


}
