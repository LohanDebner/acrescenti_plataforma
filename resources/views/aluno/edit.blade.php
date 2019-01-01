@extends('layouts.app')
@section('title', 'Edit')
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Cadastro de Aluno</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Início</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Aluno</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Edição do cadastro de Aluno</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
            <div class="ibox ">
        <div class="ibox-title">
            <h5>Edição dos dados pessoais do aluno. </h5>           
        </div>
        <div class="ibox-content">

            <form class="m-t" role="form" action="/aluno/{{$aluno->id}}" method="POST">
                            
                {{csrf_field()}} 
                {{method_field('PATCH')}}
                
                <div class="form-group row">
                        <label class="col-sm-1 col-form-label" >Nome</label>
                        <div class="col-sm-11"><input type="text" name="Nome" class="form-control" value="{{$aluno->Nome}}"></div>
                    </div>
    
                    <div class="hr-line-dashed"></div>
    
                    <div class="form-group  row">
                            <label class="col-sm-1 col-form-label">CPF</label>
                            <div class="col-md-2"> <input type="text" name="CPF" data-mask="999.999.999-99" class="form-control" value="{{$aluno->CPF}}"></div>                        
                    </div>
    
                    <div class="hr-line-dashed"></div>  
    
                    <div class="form-group  row">
                         <label class="col-sm-1 col-form-label">RG</label>
                         <div class="col-md-3"><input type="text" name="RG" class="form-control" value="{{$aluno->RG}}"></div>
    
                         <label class="col-md-1 col-form-label">Emissor RG</label>
                         <div class="col-md-3"><input type="text" name="EmissorRG" class="form-control" value="{{$aluno->EmissorRG}}"></div>
                    </div>
    
                     <div class="hr-line-dashed"></div> 
    
                     <div class="form-group  row">
                        <label class="col-md-1 col-form-label">Sexo</label>
                        <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="1" name="Sexo" <?php if($aluno->Sexo == "1"){ echo "checked"; }?>> <i></i> Masculino</label></div></div>
                        <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="2" name="Sexo" <?php if($aluno->Sexo == "2"){ echo "checked"; }?>> <i></i> Feminino</label></div></div>
                        <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="0" name="Sexo" <?php if($aluno->Sexo == "0"){ echo "checked"; }?>> <i></i> Indefinido</label></div></div>
                    </div>
    
                    <div class="hr-line-dashed"></div>
    
                    <div class="form-group row">                
                        <div class="form-group" id="data_nascimento_picker"> 
                            <label class="col-md-1 col-form-label">Data de Nascimento</label>
                            <div class="col-md-2 input-group date" style="padding-left: 15px;">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="DataNascimento" class="form-control" value="{{$aluno->DataNascimento}}">
                            </div>
                         </div>
                    </div>     
    
                    <div class="hr-line-dashed"></div>  
    
                    <div class="form-group row">
                        <label class="col-md-1 col-form-label">Telefone 1</label>
                        <div class="col-md-2"><input type="text" name="Telefone1" class="form-control" data-mask="(99) 99999-9999" placeholder="" value="{{$aluno->Telefone1}}"><span class="form-text">(99) 99999-9999</span></div>      
                    
                        <label class="col-md-1 col-form-label">Telefone 2</label>
                        <div class="col-md-2"><input type="text" name="Telefone2" class="form-control" data-mask="(99) 99999-9999" placeholder="" value="{{$aluno->Telefone2}}"><span class="form-text">(99) 99999-9999</span></div>      
                    
                        <label class="col-md-1 col-form-label">Telefone 3</label>
                        <div class="col-md-2"><input type="text" name="Telefone3" class="form-control" data-mask="(99) 99999-9999" placeholder="" value="{{$aluno->Telefone3}}"><span class="form-text">(99) 99999-9999</span></div>      
    
                    </div>
     
                    <div class="hr-line-dashed"></div>   
    
                    <div class="form-group  row">
                            <label class="col-md-1 col-form-label">Email</label>
                            <div class="col-md-11"><input type="text"name="Email" class="form-control" value="{{$aluno->Email}}"></div>
                        </div>
    
                    <div class="hr-line-dashed"></div>   
    
                     <div class="form-group row">
                            <label class="col-md-1 col-form-label">CEP</label>
                            <div class="col-sm-2"><input type="text"name="CEP" class="form-control" data-mask="99999-999" placeholder="" value="{{$aluno->CEP}}"><span class="form-text">99999-999</span></div>
                    </div>                                                                                 
                                
    
                    <div class="hr-line-dashed"></div>     
    
                    <div class="form-group  row">
                        <label class="col-sm-1 col-form-label">Endereço</label>
                        <div class="col-md-4"><input type="text" name="Endereco" class="form-control" value="{{$aluno->Endereco}}"></div>
    
                        <label class="col-sm-1 col-form-label">Número</label>
                        <div class="col-md-1"><input type="text" name="EnderecoNum" class="form-control" value="{{$aluno->EnderecoNum}}"></div>
    
                        <label class="col-sm-1 col-form-label">Complemento</label>
                        <div class="col-md-4"><input type="text" name="EnderecoComp" class="form-control" value="{{$aluno->EnderecoComp}}"></div>
    
                    </div>
    
                    <div class="hr-line-dashed"></div>
    
                    <div class="form-group  row">
                        <label class="col-sm-1 col-form-label">Bairro</label>
                        <div class="col-md-4"><input type="text" name="Bairro" class="form-control" value="{{$aluno->Bairro}}"></div>
    
                        <label class="col-sm-1 col-form-label">Cidade</label>
                        <div class="col-md-4"><input type="text" name="Cidade" class="form-control" value="{{$aluno->Cidade}}"></div>
    
                        <label class="col-sm-1 col-form-label">Estado</label>
                        <div class="col-md-1"><input type="text" name="Estado" class="form-control" value="{{$aluno->Estado}}"></div>
                    </div>
    
                    <div class="hr-line-dashed"></div>
    
                    <div class="form-group row">                
                        <div class="form-group" id="data_ingresso_picker"> 
                            <label class="col-md-1 col-form-label">Data de Ingresso</label>
                            <div class="col-md-2 input-group date" style="padding-left: 15px;">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="DataIngresso" class="form-control" value="{{$aluno->DataIngresso}}">
                            </div>
                        </div>
                    </div>      
    
                    <div class="hr-line-dashed"></div>  
        
                    <div class="form-group row">
                        <label class="col-md-1 col-form-label">Possui Responsável?</label>
                        <input type="checkbox" id="possui_responsavel_switch" class="js-switch"  style="display: none;" onchange="mostrarResponsavel()">       
                    </div>
                
                    
    
                    <div id="divResponsavel" style="display:none">
                        
                        <div class="form-group  row">
                            <label class="col-sm-1 col-form-label">Nome Responsável</label>
                            <div class="col-md-11"><input type="text" name="NomeResponsavel" class="form-control" value="{{$aluno->NomeResponsavel}}"></div>
                        </div>
        
                        <div class="hr-line-dashed"></div>
    
                        <div class="form-group  row">
                            <label class="col-sm-1 col-form-label">CPF Responsável</label>
                            <div class="col-md-2"> <input type="text" name="CPFResponsavel" data-mask="999.999.999-99" class="form-control" value="{{$aluno->CPFResponsavel}}"></div>                        
                        </div>
                    </div>
                    
                    <div class="hr-line-dashed"></div> 
    
                     <div class="form-group  row">
                        <label class="col-md-1 col-form-label">Status</label>
                        <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="1" name="Status" <?php if($aluno->Status == "1"){ echo "checked"; }?>><i></i> Ativo</label></div></div>
                        <div class="col-sm-2"><div class="i-checks"><label> <input type="radio" value="0" name="Status" <?php if($aluno->Status == "0"){ echo "checked"; }?>><i></i> Inativo</label></div></div>
                    
                    </div>
    
                    <div class="hr-line-dashed"></div> 

                    <div class="form=group row">
                        <div class="col-sm-2 col-sm-offset-10">
                            <button type="submit" class="btn btn-primary block full-width m-b">Salvar</button>
                        </div>  
                    </div>

                    <script>
                        function mostrarResponsavel() {
                            
                            var switch_possui_responsavel = document.getElementById("possui_responsavel_switch");
                            var text = document.getElementById("divResponsavel");
    
                            if (switch_possui_responsavel.checked == true){
                                text.style.display = "block";
                            } else {
                                text.style.display = "none";
                            }
                        }
                    </script>    

            </form> 
            <form method="POST" action="/aluno/{{$aluno->id}}">
                            
                {{csrf_field()}} 
                {{method_field('DELETE')}}

                <div class="form=group row">
                    <div class="col-sm-2 col-sm-offset-10">
                        <button type="submit" class="btn btn-outline btn-danger btn-md block full-width m-b">Deletar</button>
                    </div>  
                </div>
            </form>
        </div>
        </div>
</div>
</div>
</div>
 
@endsection
