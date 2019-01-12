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
      
      ////Adicionando máscara p/ Telefone1
      foreach ($aluno as $item) 
      {
        if ($item->Telefone1 !== ""){ 
            $item->Telefone1 = "(".$item->Telefone1[0].$item->Telefone1[1].")"
                            .$item->Telefone1[2].$item->Telefone1[3].$item->Telefone1[4].$item->Telefone1[5].$item->Telefone1[6]."-"
                            .$item->Telefone1[7].$item->Telefone1[8].$item->Telefone1[9].$item->Telefone1[10];
        
        }

        switch ($item->StatusAluno) {
            case 0:
                $item->StatusAluno = "Inativo";
                break;
            case 1:
                $item->StatusAluno = "Ativo";
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
        $aluno->nome = request('Nome');
        //CPF
        $CPF = request('CPF');
        $CPF = str_replace("-","",$CPF);
        $CPF = str_replace(".","",$CPF);        
        $aluno->CPF = $CPF;

        $aluno->RG = request('RG');
        $aluno->EmissorRG = request('EmissorRG');
        $aluno->Sexo = request('Sexo');

        //Data Nascimento
        $dataNascimento= request('DataNascimento');
        $dataNascimento= explode("/",$dataNascimento);       
        $aluno->DataNascimento = $dataNascimento[2]."-".$dataNascimento[1]."-".$dataNascimento[0];

        //Telefone1
        $Telefone1 = request('Telefone1');
        $Telefone1 = str_replace("(","",$Telefone1);
        $Telefone1 = str_replace(")","",$Telefone1);
        $Telefone1 = str_replace("-","",$Telefone1); 
        $Telefone1 = str_replace(" ","",$Telefone1);        
        $aluno->Telefone1 = $Telefone1;
        //Telefone2
        $Telefone2 = request('Telefone2');
        $Telefone2 = str_replace("(","",$Telefone2);
        $Telefone2 = str_replace(")","",$Telefone2);
        $Telefone2 = str_replace("-","",$Telefone2); 
        $Telefone2 = str_replace(" ","",$Telefone2);        
        $aluno->Telefone2 = $Telefone2;
        //Telefone3
        $Telefone3 = request('Telefone3');
        $Telefone3 = str_replace("(","",$Telefone3);
        $Telefone3 = str_replace(")","",$Telefone3);
        $Telefone3 = str_replace("-","",$Telefone3); 
        $Telefone3 = str_replace(" ","",$Telefone3);        
        $aluno->Telefone3 = $Telefone3;

        $aluno->Email = request('Email');

        //CEP
        $CEP = request('CEP');
        $CEP = str_replace("-","",$CEP);     
        $aluno->CEP = $CEP;

        $aluno->Endereco = request('Endereco');
        $aluno->EnderecoNum = request('EnderecoNum');
        $aluno->EnderecoComp = request('EnderecoComp');
        $aluno->Bairro = request('Bairro');
        $aluno->Cidade = request('Cidade');
        $aluno->Estado = request('Estado');

        //Data Ingresso
        $dataIngresso= request('DataIngresso');
        $dataIngresso= explode("/",$dataIngresso);
        $aluno->DataIngresso = $dataIngresso[2]."-".$dataIngresso[1]."-".$dataIngresso[0];

        //Responsável
        if (request('PossuiResponsavel') =="on"){
            $aluno->PossuiResponsavel = "1";
            $aluno->NomeResponsavel = request('NomeResponsavel');

            //CPF
            $CPFResponsavel = request('CPFResponsavel');
            $CPFResponsavel = str_replace("-","",$CPFResponsavel);
            $CPFResponsavel = str_replace(".","",$CPFResponsavel);        
            $aluno->CPFResponsavel = $CPFResponsavel;

        } else{
            $aluno->PossuiResponsavel = "0";
            $aluno->NomeResponsavel = "";
            $aluno->CPFResponsavel = "";
        }

        $aluno->StatusAluno = request('StatusAluno');


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

        //Adicionando máscara p/ CPF
        $aluno->CPF =    $aluno->CPF[0].$aluno->CPF[1].$aluno->CPF[2]."."
                        .$aluno->CPF[3].$aluno->CPF[4].$aluno->CPF[5]."."
                        .$aluno->CPF[6].$aluno->CPF[7].$aluno->CPF[8]."-"
                        .$aluno->CPF[9].$aluno->CPF[10];
        
        //Seleciona o Sexo do Aluno com variáveis extras 
        switch ($aluno->Sexo){
            case 0:
                $aluno->SexoIndefinido = "checked";
                $aluno->SexoMasculino = "";
                $aluno->SexoFeminino = "";
                break;
            case 1:
                $aluno->SexoIndefinido = "";
                $aluno->SexoMasculino = "checked";
                $aluno->SexoFeminino = "";
                break;
            case 2:
                $aluno->SexoIndefinido = "";
                $aluno->SexoMasculino = "";
                $aluno->SexoFeminino = "checked";
                break;
        }

        //Adicionando máscara p/ Telefone1
        if ($aluno->Telefone1 !== ""){   
            $lenght = strlen($aluno->Telefone1);    
            
            if($lenght > 10){
            $aluno->Telefone1 = "(".$aluno->Telefone1[0].$aluno->Telefone1[1].") "
                                .$aluno->Telefone1[2].$aluno->Telefone1[3].$aluno->Telefone1[4].$aluno->Telefone1[5].$aluno->Telefone1[6]."-"
                                .$aluno->Telefone1[7].$aluno->Telefone1[8].$aluno->Telefone1[9].$aluno->Telefone1[10];
            }else{
            $aluno->Telefone1 = "(".$aluno->Telefone1[0].$aluno->Telefone1[1].") "
                                .$aluno->Telefone1[2].$aluno->Telefone1[3].$aluno->Telefone1[4].$aluno->Telefone1[5]."-"
                                .$aluno->Telefone1[6].$aluno->Telefone1[7].$aluno->Telefone1[8].$aluno->Telefone1[9];
            }
            
        }
        
         //Adicionando máscara p/ Telefone2
         if ($aluno->Telefone2 !== ""){   
            $lenght = strlen($aluno->Telefone2);    
            
            if($lenght > 10){
            $aluno->Telefone2 = "(".$aluno->Telefone2[0].$aluno->Telefone2[1].") "
                                .$aluno->Telefone2[2].$aluno->Telefone2[3].$aluno->Telefone2[4].$aluno->Telefone2[5].$aluno->Telefone2[6]."-"
                                .$aluno->Telefone2[7].$aluno->Telefone2[8].$aluno->Telefone2[9].$aluno->Telefone2[10];
            }else{
            $aluno->Telefone2 = "(".$aluno->Telefone2[0].$aluno->Telefone2[1].") "
                                .$aluno->Telefone2[2].$aluno->Telefone2[3].$aluno->Telefone2[4].$aluno->Telefone2[5]."-"
                                .$aluno->Telefone2[6].$aluno->Telefone2[7].$aluno->Telefone2[8].$aluno->Telefone2[9];
            }
            
        }

        //Adicionando máscara p/ Telefone3
        if ($aluno->Telefone3 !== ""){   
            $lenght = strlen($aluno->Telefone3);    
            
            if($lenght > 10){
            $aluno->Telefone3 = "(".$aluno->Telefone3[0].$aluno->Telefone3[1].") "
                                .$aluno->Telefone3[2].$aluno->Telefone3[3].$aluno->Telefone3[4].$aluno->Telefone3[5].$aluno->Telefone3[6]."-"
                                .$aluno->Telefone3[7].$aluno->Telefone3[8].$aluno->Telefone3[9].$aluno->Telefone3[10];
            }else{
            $aluno->Telefone3 = "(".$aluno->Telefone3[0].$aluno->Telefone3[1].") "
                                .$aluno->Telefone3[2].$aluno->Telefone3[3].$aluno->Telefone3[4].$aluno->Telefone3[5]."-"
                                .$aluno->Telefone3[6].$aluno->Telefone3[7].$aluno->Telefone3[8].$aluno->Telefone3[9];
            }
            
        }

        //Adicionando máscara p/ CEP
        if ($aluno->CEP!== ""){
            $aluno->CEP = $aluno->CEP[0].$aluno->CEP[1].$aluno->CEP[2].$aluno->CEP[3].$aluno->CEP[4]
                          ."-".$aluno->CEP[5].$aluno->CEP[6].$aluno->CEP[7];
        }

        //Modificando formato Data Nascimento
        $aluno->DataNascimento = explode(" ",$aluno->DataNascimento); 
        $aluno->DataNascimento = explode("-",$aluno->DataNascimento[0]); 
        $aluno->DataNascimento = $aluno->DataNascimento[2]."/".$aluno->DataNascimento[1]."/".$aluno->DataNascimento[0]; 

        //Modificando formato Data Ingresso
        $aluno->DataIngresso = explode(" ",$aluno->DataIngresso); 
        $aluno->DataIngresso = explode("-",$aluno->DataIngresso[0]); 
        $aluno->DataIngresso = $aluno->DataIngresso[2]."/".$aluno->DataIngresso[1]."/".$aluno->DataIngresso[0]; 

        //Responsável
        if ($aluno->PossuiResponsavel =="1"){   

            $aluno->PossuiResponsavel = "checked";
            //Adicionando máscara p/ CPFResponsavel
            if ($aluno->CPFResponsavel!== ""){
                $aluno->CPFResponsavel =    $aluno->CPFResponsavel[0].$aluno->CPFResponsavel[1].$aluno->CPFResponsavel[2]."."
                                            .$aluno->CPFResponsavel[3].$aluno->CPFResponsavel[4].$aluno->CPFResponsavel[5]."."
                                            .$aluno->CPFResponsavel[6].$aluno->CPFResponsavel[7].$aluno->CPFResponsavel[8]."-"
                                            .$aluno->CPFResponsavel[9].$aluno->CPFResponsavel[10];
            }
            //Variável extra criada para exibir divResponsável caso o aluno tenha
            $aluno->divPossuiResponsavel = 'style=display:block';

        } else{
            $aluno->PossuiResponsavel = "";
            //Variável extra criada para não exibir divResponsável caso o aluno não tenha
            $aluno->divPossuiResponsavel = 'style=display:none';
        }

        //Seleciona o Status do Aluno com variáveis extras    
        if($aluno->StatusAluno=="1"){
            $aluno->StatusAlunoAtivo = "checked"; 
            $aluno->StatusAlunoInativo = "";
        } else{
            $aluno->StatusAlunoAtivo = ""; 
            $aluno->StatusAlunoInativo = "checked";
        }  
        

        return view('aluno.edit', compact('aluno'));
    }


    public function update($id)
    {
        $aluno = Aluno::find($id);

        $aluno->nome = request('Nome');
        //CPF
        $CPF = request('CPF');
        $CPF = str_replace("-","",$CPF);
        $CPF = str_replace(".","",$CPF);        
        $aluno->CPF = $CPF;

        $aluno->RG = request('RG');
        $aluno->EmissorRG = request('EmissorRG');
        $aluno->Sexo = request('Sexo');

        //Data Nascimento
        $dataNascimento= request('DataNascimento');
        $dataNascimento= explode("/",$dataNascimento);       
        $aluno->DataNascimento = $dataNascimento[2]."-".$dataNascimento[1]."-".$dataNascimento[0];

        //Telefone1
        $Telefone1 = request('Telefone1');
        $Telefone1 = str_replace("(","",$Telefone1);
        $Telefone1 = str_replace(")","",$Telefone1);
        $Telefone1 = str_replace("-","",$Telefone1); 
        $Telefone1 = str_replace(" ","",$Telefone1);        
        $aluno->Telefone1 = $Telefone1;
        //Telefone2
        $Telefone2 = request('Telefone2');
        $Telefone2 = str_replace("(","",$Telefone2);
        $Telefone2 = str_replace(")","",$Telefone2);
        $Telefone2 = str_replace("-","",$Telefone2); 
        $Telefone2 = str_replace(" ","",$Telefone2);        
        $aluno->Telefone2 = $Telefone2;
        //Telefone3
        $Telefone3 = request('Telefone3');
        $Telefone3 = str_replace("(","",$Telefone3);
        $Telefone3 = str_replace(")","",$Telefone3);
        $Telefone3 = str_replace("-","",$Telefone3); 
        $Telefone3 = str_replace(" ","",$Telefone3);        
        $aluno->Telefone3 = $Telefone3;

        $aluno->Email = request('Email');

        //CEP
        $CEP = request('CEP');
        $CEP = str_replace("-","",$CEP);     
        $aluno->CEP = $CEP;

        $aluno->Endereco = request('Endereco');
        $aluno->EnderecoNum = request('EnderecoNum');
        $aluno->EnderecoComp = request('EnderecoComp');
        $aluno->Bairro = request('Bairro');
        $aluno->Cidade = request('Cidade');
        $aluno->Estado = request('Estado');

        //Data Ingresso
        $dataIngresso= request('DataIngresso');
        $dataIngresso= explode("/",$dataIngresso);
        $aluno->DataIngresso = $dataIngresso[2]."-".$dataIngresso[1]."-".$dataIngresso[0];

        //Responsável
        if (request('PossuiResponsavel') =="on"){
            $aluno->PossuiResponsavel = "1";
            $aluno->NomeResponsavel = request('NomeResponsavel');

            //CPF
            $CPFResponsavel = request('CPFResponsavel');
            $CPFResponsavel = str_replace("-","",$CPFResponsavel);
            $CPFResponsavel = str_replace(".","",$CPFResponsavel);        
            $aluno->CPFResponsavel = $CPFResponsavel;

        } else{
            $aluno->PossuiResponsavel = "0";
            $aluno->NomeResponsavel = "";
            $aluno->CPFResponsavel = "";
        }

        $aluno->StatusAluno = request('StatusAluno');

        $aluno->save();

        return redirect ('/aluno'); 
    }

    public function destroy($id)
    {
        Aluno::find($id)->delete();
        return redirect ('/aluno'); 
    }
}
