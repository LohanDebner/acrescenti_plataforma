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
                            <div class="col-md-"><label class="col-md-1">Nome</label></div>
                            <div class="col-md-11"><input type="text" name="Nome" class="form-control" placeholder="Title" required="" value="{{ $aluno->Nome}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">CPF</label></div>
                            <div class="col-md-11"><input type="text" name="CPF" class="form-control" placeholder="Title" required="" value="{{ $aluno->CPF}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">RG</label></div>
                            <div class="col-md-11"><input type="text" name="RG" class="form-control" placeholder="Title" required="" value="{{ $aluno->RG}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Emissor RG</label></div>
                            <div class="col-md-11"><input type="text" name="EmissorRG" class="form-control" placeholder="Title" required="" value="{{ $aluno->EmissorRG}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Sexo</label></div>
                            <div class="col-md-11"><input type="text" name="Sexo" class="form-control" placeholder="Title" required="" value="{{ $aluno->Sexo}}"></div>              
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Data Nascimento</label></div>
                            <div class="col-md-11"><input type="text" name="DataNascimento" class="form-control" placeholder="Title" required="" value="{{ $aluno->DataNascimento}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Telefone 1</label></div>
                            <div class="col-md-11"><input type="text" name="Telefone1" class="form-control" placeholder="Title" required="" value="{{ $aluno->Telefone1}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Telefone 2</label></div>
                            <div class="col-md-11"><input type="text" name="Telefone2" class="form-control" placeholder="Title" required="" value="{{ $aluno->Telefone2}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Telefone 3</label></div>
                            <div class="col-md-11"><input type="text" name="Telefone3" class="form-control" placeholder="Title" required="" value="{{ $aluno->Telefone3}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Email</label></div>
                            <div class="col-md-11"><input type="text" name="Email" class="form-control" placeholder="Title" required="" value="{{ $aluno->Email}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">CEP</label></div>
                            <div class="col-md-11"><input type="text" name="CEP" class="form-control" placeholder="Title" required="" value="{{ $aluno->CEP}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Endereço</label></div>
                            <div class="col-md-11"><input type="text" name="Endereco" class="form-control" placeholder="Title" required="" value="{{ $aluno->Endereco}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Endereço Número</label></div>
                            <div class="col-md-11"><input type="text" name="EnderecoNum" class="form-control" placeholder="Title" required="" value="{{ $aluno->EnderecoNum}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Endereço Complemento</label></div>
                            <div class="col-md-11"><input type="text" name="EnderecoComp" class="form-control" placeholder="Title" required="" value="{{ $aluno->EnderecoComp}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Bairro</label></div>
                            <div class="col-md-11"><input type="text" name="Bairro" class="form-control" placeholder="Title" required="" value="{{ $aluno->Bairro}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Cidade</label></div>
                            <div class="col-md-11"><input type="text" name="Cidade" class="form-control" placeholder="Title" required="" value="{{ $aluno->Cidade}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Estado</label></div>
                            <div class="col-md-11"><input type="text" name="Estado" class="form-control" placeholder="Title" required="" value="{{ $aluno->Estado}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Data Ingresso</label></div>
                            <div class="col-md-11"><input type="text" name="DataIngresso" class="form-control" placeholder="Title" required="" value="{{ $aluno->DataIngresso}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">Nome Responsável</label></div>
                            <div class="col-md-11"><input type="text" name="NomeResponsavel" class="form-control" placeholder="Sem Responsável" required="" value="{{ $aluno->NomeResponsavel}}"></div>              
                        </div>

                        <div class="form-group row">
                            <div class="col-md-"><label class="col-md-1">CPF Responsável</label></div>
                            <div class="col-md-11"><input type="text" name="CPFResponsavel" class="form-control" placeholder="Sem Responsável" required="" value="{{ $aluno->CPFResponsavel}}"></div>              
                        </div>


                        <div class="form=group row">
                            <div class="col-md-11"><label></label></div> 
                            <div class="col-md-1"><button type="submit" class="btn btn-primary btn-md block full-width m-b">Salvar</button></div>  
                        </div>
                    </form> 
                    
                    <form method="POST" action="/aluno/{{$aluno->id}}">
                                    
                        {{csrf_field()}} 
                        {{method_field('DELETE')}}
                        <div class="form=group row">
                            <div class="col-md-11"><label></label></div> 
                            <div class="col-md-1"><button type="submit" class="btn btn-outline btn-danger btn-md block full-width m-b">Deletar</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection
