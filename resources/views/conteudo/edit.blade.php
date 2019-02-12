@extends('layouts.app')
@section('title', 'Criação de conteudo')
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Upload de Conteúdo</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/aluno">Início</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Conteudo</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Upload de Conteudo</strong>
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
       <!-- <div class="ibox-title">
            <h5>Cadastro de dados pessoais do aluno. </h5>           
        </div>-->
        <div class="ibox-content">

            <form  class="m-t" role="form" action="/conteudo/{{$conteudo->id}}" method="POST">
                {{csrf_field()}} 
                {{method_field('PATCH')}}

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Tipo de Conteudo</label>
                    <div class="col-sm-11">
                        <select id="tipo_conteudo" class="form-control m-b" name="tipo_conteudo" onchange="mostrarCampo(this)">
                            <option value="0">- Selecione uma Opção -</option>
                            <option value="1" {{$conteudo->ConteudoExercicio}}>Exercicio</option>
                            <option value="2" {{$conteudo->ConteudoVideoAula}}>Video Aula</option>
                            <option value="3" {{$conteudo->ConteudoVideoExercicio}}>Video Exercicio</option>
                        </select>
                    </div>
                </div>
                
                <!-- Campos Comuns -->
                <div class="hr-line-dashed"></div>

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label" >Titulo</label>
                    <div class="col-sm-11"><input type="text" name="titulo" value="{{$conteudo->titulo}}" class="form-control" required></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label" >Origem</label>
                    <div class="col-sm-11"><input type="text" name="origem" value="{{$conteudo->origem}}" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label" >Descrição</label>
                    <div class="col-sm-11"><textarea rows="3" cols="40" name="descricao" class="form-control">{{$conteudo->descricao}}</textarea></div>
                </div>
                                 
                <!--divExercicio -->
                <div id="divExercicio" style="display:none">

                    <div class="hr-line-dashed"></div>

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Tipo de Exercicio</label>
                        <div class="col-sm-11">
                            <select class="form-control m-b" name="tipo_exercicio" id="tipo_exercicio" onchange="mostrarExercicio(this)">
                                <option value="2" {{$conteudo->TipoExercicioDissertativa}}>Dissertativa</option>
                                <option value="1" {{$conteudo->TipoExercicioAlternativa}}>Alternativa</option>
                            </select>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <!-- divRespostaAlternativa -->
                    <div id="divRespostaAlternativa" style="display:none">                        
                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label" >Respostas</label>
                        </div>
                        <div class="form-group row">
                            <div id="divFlutuanteRespostas">  
                                @foreach ($resposta as $RespostaItem) 
                                      
                                <div id="divResposta{{$loop->iteration}}">
                                    <div class='col-sm-5 col-sm-offset-1'>
                                        <input type=text class='form-control input resposta' name="Resposta{{$loop->iteration}}"  id="Resposta{{$loop->iteration}}" value="{{$RespostaItem->valor}}">
                                    </div>
                                    <div class='col-sm-1' style='padding-top: 5px;'>
                                        @if ($RespostaItem->resposta_correta =='1')
                                        <label style='padding-right: 15px;'><input class='i-checks' type='checkbox' value="1" checked name="checkResposta{{$loop->iteration}}"><i></i></label>
                                        @else
                                        <label style='padding-right: 15px;'><input class='i-checks' type='checkbox' value="1" name="checkResposta{{$loop->iteration}}"><i></i></label>
                                        @endif
                                        <button type='button' class='btn btn-danger' id="botaoRemoverResposta{{$loop->iteration}}" onclick='removerResposta({{$loop->iteration}})'><i class='fa fa-times'></i></button></div>
                                    </div>    
                            @endforeach                                                                                                          
                            </div>  
                        </div> 
                        <div class="form-group row">
                            <div class="col-sm-1 col-sm-offset-1"><button type="button" class="btn btn-primary" id="botaoAdicionarResposta"><i class="fa fa-plus"></i></button></div>                 
                        </div>
                    </div>

                    <!-- divRespostaDissertativa -->
                    <div id="divRespostaDissertativa">
                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label">Resposta</label>
                            <div class="col-sm-10"><textarea rows="3" cols="40" name="RespostaDissertativa" class="form-control">{{$RespostaItem->valor}}</textarea></div>
                            <label style="padding-left: 15px;"><input class="i-checks" type="checkbox" value="0" checked disabled> <i></i></label>
                        </div>
                    </div> 
                <input type="text" name="QuantidadeRespostas" id="QuantidadeRespostas" value="{{count($resposta)}}" hidden>
                </div>

                <!--divVideo -->
                <div id="divVideo" style="display:none">

                    <div class="hr-line-dashed"></div> 

                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label" >Video Path</label>
                        <div class="col-sm-11"><input type="text" name="video_path" value="{{$conteudo->video_path}}" class="form-control"></div>
                    </div>
                </div>

                <!--divDicas -->
                <div id="divListaDicas" style="display:none">

                    <div class="hr-line-dashed"></div>
                          
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label" >Dicas</label>
                    </div>
                    <div class="form-group row">
                        <div id="divFlutuanteDicas"> 
                            @foreach ($dica as $DicaItem) 
                                    
                            <div id="divDica{{$loop->iteration}}">
                                <div class='col-sm-10 col-sm-offset-1'>
                                    <textarea rows="3" cols="40" class="form-control dica" name="Dica{{$loop->iteration}}" id="Dica{{$loop->iteration}}">{{$DicaItem->descricao}}</textarea>
                                </div>
                                <div class='col-sm-1' style="padding-top: 20px;padding-bottom: 5px;">
                                    <button type='button' class='btn btn-danger' id="botaoRemoverDica{{$loop->iteration}}" onclick='removerDica({{$loop->iteration}})'><i class='fa fa-times'></i></button></div>
                                </div>    
                        @endforeach                             
                        </div>  
                    </div> 
                    <div class="form-group row">
                        <div class="col-sm-1 col-sm-offset-1"><button type="button" class="btn btn-primary" id="botaoAdicionarDica"><i class="fa fa-plus"></i></button></div>                 
                    </div>                    

                <input type="text" name="QuantidadeDicas" id="QuantidadeDicas" value="{{count($dica)}}" hidden>
                </div>

                <div class="hr-line-dashed"></div> 

                <!--
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Adicionar Arquivo</span>
                    <span class="fileinput-exists">Modificar</span><input type="file" name="..."/></span>
                    <span class="fileinput-filename"></span>
                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                </div> 
            -->
                <div class="hr-line-dashed"></div> 

                <div class="form=group row">
                    <div class="col-sm-1 col-sm-offset-10">
                            <a href="/conteudo"><button type="button" class="btn btn-danger block full-width m-b" id="botaoCancelar">Cancelar</button>
                    </div> 
                    <div class="col-sm-1 ">
                        <button type="submit" class="btn btn-primary block full-width m-b" id="botaoSalvar" disabled>Salvar</button>
                    </div>  
                </div>            
            
            </form> 
            <form method="POST" action="/conteudo/{{$conteudo->id}}" id="formDeletar">
                            <!-- -->
                {{csrf_field()}} 
                {{method_field('DELETE')}}

                <div class="form=group row">
                    <div class="col-sm-2 col-sm-offset-10">
                        <button type="reset" id="botaoDeletar" class="btn btn-outline btn-danger btn-md block full-width m-b">Deletar</button>
                    </div>  
                </div>
            </form>

            
            <script>
                function mostrarCampo(el) {
                    switch (el.value){
                        case '0':
                            document.getElementById('divExercicio').style.display ='none';
                            document.getElementById('divVideo').style.display ='none';
                            document.getElementById("botaoSalvar").disabled = true;
                            document.getElementById('divListaDicas').style.display ='none';
                            break;    
                        case '1':
                            document.getElementById('divExercicio').style.display ='block';
                            document.getElementById('divVideo').style.display ='none';
                            document.getElementById("botaoSalvar").disabled = false;
                            document.getElementById('divListaDicas').style.display ='block';
                            break;    
                        case '2':
                            document.getElementById('divExercicio').style.display ='none';
                            document.getElementById('divVideo').style.display ='block';
                            document.getElementById("botaoSalvar").disabled = false;
                            document.getElementById('divListaDicas').style.display ='block';
                            break;   
                        case '3':
                            document.getElementById('divExercicio').style.display ='none';
                            document.getElementById('divVideo').style.display ='block';
                            document.getElementById("botaoSalvar").disabled = false;
                            document.getElementById('divListaDicas').style.display ='block';
                            break;  
                        default:
                            document.getElementById('divExercicio').style.display ='none';
                            document.getElementById('divVideo').style.display ='none'; 
                            document.getElementById("botaoSalvar").disabled = true;
                            document.getElementById('divListaDicas').style.display ='none';
                    }
                };
            </script>

            <script>
                function mostrarExercicio(el) {
                    switch (el.value){
                        case '1':
                            document.getElementById('divRespostaAlternativa').style.display ='block';
                            document.getElementById('divRespostaDissertativa').style.display ='none';
                            
                            break;    
                        case '2':
                            document.getElementById('divRespostaAlternativa').style.display ='none';
                            document.getElementById('divRespostaDissertativa').style.display ='block';

                            break;   
                        default:
                            document.getElementById('divRespostaAlternativa').style.display ='none';
                            document.getElementById('divRespostaDissertativa').style.display ='none';
                    }

                };
            </script>
        
            <script>
                     $(document).ready(function() {
                        
                        mostrarCampo(document.getElementById("tipo_conteudo"));
                        mostrarExercicio(document.getElementById("tipo_exercicio"));
                        
                            
                                                           
                    });

                    $(document).ready(function() {
                
                        var iCnt = parseInt(document.getElementById("QuantidadeRespostas").value);
                                                    
                        $('#botaoAdicionarResposta').click(function() {
                                                                    
                            iCnt = iCnt+1;
                            $('#divFlutuanteRespostas').append('<div id=divResposta' + iCnt +'><div class="col-sm-5 col-sm-offset-1"><input type=text class="form-control input resposta" name="Resposta' + iCnt + '"  id=Resposta' + iCnt + ' placeholder="Alternativa ' + iCnt + '"></div>'+
                                '<div class="col-sm-1" style="padding-top: 5px;"><label style="padding-right: 15px;"><input class="i-checks" type="checkbox" value="1" name=checkResposta' + iCnt +'><i></i></label>'+
                                '<button type="button" class="btn btn-danger" id=botaoRemoverResposta' + iCnt + ' '+ 'onclick="removerResposta(' + iCnt +')"><i class="fa fa-times"></i></button></div></div>');                            

                                $('.i-checks').iCheck({
                                    checkboxClass: 'icheckbox_square-green',
                                    radioClass: 'iradio_square-green',
                                }); 
                            
                            //var quantidade = document.getElementsByClassName("resposta").length;
                            document.getElementById("QuantidadeRespostas").value = iCnt; 
                        });                                      
                    });
                    
                    $(document).ready(function() {
                
                        var iCntDica = parseInt(document.getElementById("QuantidadeDicas").value);;
                                                    
                        $('#botaoAdicionarDica').click(function() {
                                                                    
                            iCntDica = iCntDica+1;
                            $('#divFlutuanteDicas').append('<div id=divDica' + iCntDica +'><div class="col-sm-10 col-sm-offset-1"><textarea rows="3" cols="40" class="form-control dica" name="Dica' + iCntDica + '"  id=Dica' + iCntDica + ' placeholder="Dica ' + iCntDica + '"></textarea></div>'+            
                                '<div class="col-sm-1" style="padding-top: 20px;padding-bottom: 5px;"><button type="button" class="btn btn-danger" id=botaoRemoverDica' + iCntDica + ' '+ 'onclick="removerDica(' + iCntDica +')"><i class="fa fa-times"></i></button></div></div>');                            
                            
                            //var quantidade = document.getElementsByClassName("dica").length;
                            document.getElementById("QuantidadeDicas").value = iCntDica; 
                            
                        });                                      
                    });
            </script>  

            <script>
                function removerResposta(item) {
                        $("#Resposta"+item).remove();
                        $("#botaoRemoverResposta"+item).remove();
                        $("#divResposta"+item).remove();                       
                    }   
                function removerDica(item) {
                        $("#Dica"+item).remove();
                        $("#botaoRemoverDica"+item).remove();
                        $("#divDica"+item).remove();                 
                    }                    
                    
            </script>           
        </div>
        </div>
</div>
</div>
</div>

@endsection