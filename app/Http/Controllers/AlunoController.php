<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aluno;

class AlunoController extends Controller
{

    public function index()
    {
      $aluno = Aluno::all();
      
      ////Adicionando máscara p/ telefone_1
      foreach ($aluno as $item) 
      {
        if ($item->telefone_1 !== ""){   
            $lenght = strlen($item->telefone_1);    
            
            if($lenght > 10){
            $item->telefone_1 = "(".$item->telefone_1[0].$item->telefone_1[1].") "
                                .$item->telefone_1[2].$item->telefone_1[3].$item->telefone_1[4].$item->telefone_1[5].$item->telefone_1[6]."-"
                                .$item->telefone_1[7].$item->telefone_1[8].$item->telefone_1[9].$item->telefone_1[10];
            }else{
            $item->telefone_1 = "(".$item->telefone_1[0].$item->telefone_1[1].") "
                                .$item->telefone_1[2].$item->telefone_1[3].$item->telefone_1[4].$item->telefone_1[5]."-"
                                .$item->telefone_1[6].$item->telefone_1[7].$item->telefone_1[8].$item->telefone_1[9];
            }
        }           

        switch ($item->status_aluno){
            case 0:
                $item->status_aluno = "Inativo";
                break;
            case 1:
                $item->status_aluno = "Ativo";
                break;
        }
      }

      return view('aluno.index',['aluno'=>$aluno]);

    }

    public function create()
    {
        return view('aluno.create');
    }


    public function store()
    {
        $aluno = new Aluno();
        $aluno->nome = request('nome');
        //cpf
        $cpf = request('cpf');
        $cpf = str_replace("-","",$cpf);
        $cpf = str_replace(".","",$cpf);        
        $aluno->cpf = $cpf;

        $aluno->rg = request('rg');
        $aluno->emissor_rg = request('emissor_rg');
        $aluno->sexo = request('sexo');

        //Data Nascimento
        $data_nascimento= request('data_nascimento');
        $data_nascimento= explode("/",$data_nascimento);       
        $aluno->data_nascimento = $data_nascimento[2]."-".$data_nascimento[1]."-".$data_nascimento[0];

        //telefone_1
        $telefone_1 = request('telefone_1');
        $telefone_1 = str_replace("(","",$telefone_1);
        $telefone_1 = str_replace(")","",$telefone_1);
        $telefone_1 = str_replace("-","",$telefone_1); 
        $telefone_1 = str_replace(" ","",$telefone_1);        
        $aluno->telefone_1 = $telefone_1;
        //telefone_2
        $telefone_2 = request('telefone_2');
        $telefone_2 = str_replace("(","",$telefone_2);
        $telefone_2 = str_replace(")","",$telefone_2);
        $telefone_2 = str_replace("-","",$telefone_2); 
        $telefone_2 = str_replace(" ","",$telefone_2);        
        $aluno->telefone_2 = $telefone_2;
        //telefone_3
        $telefone_3 = request('telefone_3');
        $telefone_3 = str_replace("(","",$telefone_3);
        $telefone_3 = str_replace(")","",$telefone_3);
        $telefone_3 = str_replace("-","",$telefone_3); 
        $telefone_3 = str_replace(" ","",$telefone_3);        
        $aluno->telefone_3 = $telefone_3;

        $aluno->email = request('email');

        //cep
        $cep = request('cep');
        $cep = str_replace("-","",$cep);     
        $aluno->cep = $cep;

        $aluno->endereco = request('endereco');
        $aluno->endereco_num = request('endereco_num');
        $aluno->endereco_comp = request('endereco_comp');
        $aluno->bairro = request('bairro');
        $aluno->cidade = request('cidade');
        $aluno->estado = request('estado');

        //Data Ingresso
        $data_ingresso= request('data_ingresso');
        $data_ingresso= explode("/",$data_ingresso);
        $aluno->data_ingresso = $data_ingresso[2]."-".$data_ingresso[1]."-".$data_ingresso[0];

        //Responsável
        if (request('possui_responsavel') =="on"){
            $aluno->possui_responsavel = "1";
            $aluno->nome_responsavel = request('nome_responsavel');

            //cpf
            $cpf_responsavel = request('cpf_responsavel');
            $cpf_responsavel = str_replace("-","",$cpf_responsavel);
            $cpf_responsavel = str_replace(".","",$cpf_responsavel);        
            $aluno->cpf_responsavel = $cpf_responsavel;

        } else{
            $aluno->possui_responsavel = "0";
            $aluno->nome_responsavel = "";
            $aluno->cpf_responsavel = "";
        }

        $aluno->status_aluno = request('status_aluno');


        $aluno->save();

        return redirect ('/aluno');      

        //dd(request()->all()); 
    }


    public function show($id)
    {
        $aluno = Aluno::all();
        return view('aluno.index',['aluno'=>$aluno]);
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);

        //Adicionando máscara p/ cpf
        $aluno->cpf =    $aluno->cpf[0].$aluno->cpf[1].$aluno->cpf[2]."."
                        .$aluno->cpf[3].$aluno->cpf[4].$aluno->cpf[5]."."
                        .$aluno->cpf[6].$aluno->cpf[7].$aluno->cpf[8]."-"
                        .$aluno->cpf[9].$aluno->cpf[10];
        
        //Seleciona o sexo do Aluno com variáveis extras 
        switch ($aluno->sexo){
            case 0:
                $aluno->sexo_indefinido = "checked";
                $aluno->sexo_masculino = "";
                $aluno->sexo_feminino = "";
                break;
            case 1:
                $aluno->sexo_indefinido = "";
                $aluno->sexo_masculino = "checked";
                $aluno->sexo_feminino = "";
                break;
            case 2:
                $aluno->sexo_indefinido = "";
                $aluno->sexo_masculino = "";
                $aluno->sexo_feminino = "checked";
                break;
        }

        //Adicionando máscara p/ telefone_1
        if ($aluno->telefone_1 !== ""){   
            $lenght = strlen($aluno->telefone_1);    
            
            if($lenght > 10){
            $aluno->telefone_1 = "(".$aluno->telefone_1[0].$aluno->telefone_1[1].") "
                                .$aluno->telefone_1[2].$aluno->telefone_1[3].$aluno->telefone_1[4].$aluno->telefone_1[5].$aluno->telefone_1[6]."-"
                                .$aluno->telefone_1[7].$aluno->telefone_1[8].$aluno->telefone_1[9].$aluno->telefone_1[10];
            }else{
            $aluno->telefone_1 = "(".$aluno->telefone_1[0].$aluno->telefone_1[1].") "
                                .$aluno->telefone_1[2].$aluno->telefone_1[3].$aluno->telefone_1[4].$aluno->telefone_1[5]."-"
                                .$aluno->telefone_1[6].$aluno->telefone_1[7].$aluno->telefone_1[8].$aluno->telefone_1[9];
            }
            
        }
        
         //Adicionando máscara p/ telefone_2
         if ($aluno->telefone_2 !== ""){   
            $lenght = strlen($aluno->telefone_2);    
            
            if($lenght > 10){
            $aluno->telefone_2 = "(".$aluno->telefone_2[0].$aluno->telefone_2[1].") "
                                .$aluno->telefone_2[2].$aluno->telefone_2[3].$aluno->telefone_2[4].$aluno->telefone_2[5].$aluno->telefone_2[6]."-"
                                .$aluno->telefone_2[7].$aluno->telefone_2[8].$aluno->telefone_2[9].$aluno->telefone_2[10];
            }else{
            $aluno->telefone_2 = "(".$aluno->telefone_2[0].$aluno->telefone_2[1].") "
                                .$aluno->telefone_2[2].$aluno->telefone_2[3].$aluno->telefone_2[4].$aluno->telefone_2[5]."-"
                                .$aluno->telefone_2[6].$aluno->telefone_2[7].$aluno->telefone_2[8].$aluno->telefone_2[9];
            }
            
        }

        //Adicionando máscara p/ telefone_3
        if ($aluno->telefone_3 !== ""){   
            $lenght = strlen($aluno->telefone_3);    
            
            if($lenght > 10){
            $aluno->telefone_3 = "(".$aluno->telefone_3[0].$aluno->telefone_3[1].") "
                                .$aluno->telefone_3[2].$aluno->telefone_3[3].$aluno->telefone_3[4].$aluno->telefone_3[5].$aluno->telefone_3[6]."-"
                                .$aluno->telefone_3[7].$aluno->telefone_3[8].$aluno->telefone_3[9].$aluno->telefone_3[10];
            }else{
            $aluno->telefone_3 = "(".$aluno->telefone_3[0].$aluno->telefone_3[1].") "
                                .$aluno->telefone_3[2].$aluno->telefone_3[3].$aluno->telefone_3[4].$aluno->telefone_3[5]."-"
                                .$aluno->telefone_3[6].$aluno->telefone_3[7].$aluno->telefone_3[8].$aluno->telefone_3[9];
            }
            
        }

        //Adicionando máscara p/ cep
        if ($aluno->cep!== ""){
            $aluno->cep = $aluno->cep[0].$aluno->cep[1].$aluno->cep[2].$aluno->cep[3].$aluno->cep[4]
                          ."-".$aluno->cep[5].$aluno->cep[6].$aluno->cep[7];
        }

        //Modificando formato Data Nascimento
        $aluno->data_nascimento = explode(" ",$aluno->data_nascimento); 
        $aluno->data_nascimento = explode("-",$aluno->data_nascimento[0]); 
        $aluno->data_nascimento = $aluno->data_nascimento[2]."/".$aluno->data_nascimento[1]."/".$aluno->data_nascimento[0]; 

        //Modificando formato Data Ingresso
        $aluno->data_ingresso = explode(" ",$aluno->data_ingresso); 
        $aluno->data_ingresso = explode("-",$aluno->data_ingresso[0]); 
        $aluno->data_ingresso = $aluno->data_ingresso[2]."/".$aluno->data_ingresso[1]."/".$aluno->data_ingresso[0]; 

        //Responsável
        if ($aluno->possui_responsavel =="1"){   

            $aluno->possui_responsavel = "checked";
            //Adicionando máscara p/ cpf_responsavel
            if ($aluno->cpf_responsavel!== ""){
                $aluno->cpf_responsavel =    $aluno->cpf_responsavel[0].$aluno->cpf_responsavel[1].$aluno->cpf_responsavel[2]."."
                                            .$aluno->cpf_responsavel[3].$aluno->cpf_responsavel[4].$aluno->cpf_responsavel[5]."."
                                            .$aluno->cpf_responsavel[6].$aluno->cpf_responsavel[7].$aluno->cpf_responsavel[8]."-"
                                            .$aluno->cpf_responsavel[9].$aluno->cpf_responsavel[10];
            }
            //Variável extra criada para exibir divResponsável caso o aluno tenha
            $aluno->divpossui_responsavel = 'style=display:block';

        } else{
            $aluno->possui_responsavel = "";
            //Variável extra criada para não exibir divResponsável caso o aluno não tenha
            $aluno->divpossui_responsavel = 'style=display:none';
        }

        //Seleciona o Status do Aluno com variáveis extras    
        if($aluno->status_aluno=="1"){
            $aluno->status_aluno_ativo = "checked"; 
            $aluno->status_aluno_inativo = "";
        } else{
            $aluno->status_aluno_ativo = ""; 
            $aluno->status_aluno_inativo = "checked";
        }  
        

        return view('aluno.edit', compact('aluno'));
    }


    public function update($id)
    {
        $aluno = Aluno::find($id);

        $aluno->nome = request('nome');
        //cpf
        $cpf = request('cpf');
        $cpf = str_replace("-","",$cpf);
        $cpf = str_replace(".","",$cpf);        
        $aluno->cpf = $cpf;

        $aluno->rg = request('rg');
        $aluno->emissor_rg = request('emissor_rg');
        $aluno->sexo = request('sexo');

        //Data Nascimento
        $data_nascimento= request('data_nascimento');
        $data_nascimento= explode("/",$data_nascimento);       
        $aluno->data_nascimento = $data_nascimento[2]."-".$data_nascimento[1]."-".$data_nascimento[0];

        //telefone_1
        $telefone_1 = request('telefone_1');
        $telefone_1 = str_replace("(","",$telefone_1);
        $telefone_1 = str_replace(")","",$telefone_1);
        $telefone_1 = str_replace("-","",$telefone_1); 
        $telefone_1 = str_replace(" ","",$telefone_1);        
        $aluno->telefone_1 = $telefone_1;
        //telefone_2
        $telefone_2 = request('telefone_2');
        $telefone_2 = str_replace("(","",$telefone_2);
        $telefone_2 = str_replace(")","",$telefone_2);
        $telefone_2 = str_replace("-","",$telefone_2); 
        $telefone_2 = str_replace(" ","",$telefone_2);        
        $aluno->telefone_2 = $telefone_2;
        //telefone_3
        $telefone_3 = request('telefone_3');
        $telefone_3 = str_replace("(","",$telefone_3);
        $telefone_3 = str_replace(")","",$telefone_3);
        $telefone_3 = str_replace("-","",$telefone_3); 
        $telefone_3 = str_replace(" ","",$telefone_3);        
        $aluno->telefone_3 = $telefone_3;

        $aluno->Email = request('email');

        //cep
        $cep = request('cep');
        $cep = str_replace("-","",$cep);     
        $aluno->cep = $cep;

        $aluno->endereco = request('endereco');
        $aluno->endereco_num = request('endereco_num');
        $aluno->endereco_comp = request('endereco_comp');
        $aluno->bairro = request('bairro');
        $aluno->cidade = request('cidade');
        $aluno->estado = request('estado');

        //Data Ingresso
        $data_ingresso= request('data_ingresso');
        $data_ingresso= explode("/",$data_ingresso);
        $aluno->data_ingresso = $data_ingresso[2]."-".$data_ingresso[1]."-".$data_ingresso[0];

        //Responsável
        if (request('possui_responsavel') =="on"){
            $aluno->possui_responsavel = "1";
            $aluno->nome_responsavel = request('nome_responsavel');

            //cpf
            $cpf_responsavel = request('cpf_responsavel');
            $cpf_responsavel = str_replace("-","",$cpf_responsavel);
            $cpf_responsavel = str_replace(".","",$cpf_responsavel);        
            $aluno->cpf_responsavel = $cpf_responsavel;

        } else{
            $aluno->possui_responsavel = "0";
            $aluno->nome_responsavel = "";
            $aluno->cpf_responsavel = "";
        }

        $aluno->StatusAluno = request('status_aluno');

        $aluno->save();

        return redirect ('/aluno'); 
    }

    public function destroy($id)
    {
        Aluno::find($id)->delete();
        return redirect ('/aluno'); 
    }
}
