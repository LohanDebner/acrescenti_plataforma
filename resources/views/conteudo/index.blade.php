@extends('layouts.app')
@section('title', 'Create')
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

            <form  class="m-t" role="form" action="/conteudo" method="POST">
                {{csrf_field()}} 

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Tipo de Conteudo</label>
                    <div class="col-sm-11"><select id="tipo_conteudo" class="form-control m-b" name="TipoConteudo" onchange="mostraCampo(this)">
                        <option value="1">Exercicio</option>
                        <option value="2">Video Aula</option>
                        <option value="3">Video Exercicio</option>
                    </select></div>
                </div>
                
                <div class="hr-line-dashed"></div>

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label" >Titulo</label>
                    <div class="col-sm-11"><input type="text" name="Titulo" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label" >Origem</label>
                    <div class="col-sm-11"><input type="text" name="Origem" class="form-control"></div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group row">
                    <label class="col-sm-1 col-form-label" >Descrição</label>
                    <div class="col-sm-11"><textarea rows="3" cols="40" name="Descricao" class="form-control"></textarea></div>
                </div>

                <div class="hr-line-dashed"></div>

                 
                <div class="form-group row" id="exercicio">
                    <label class="col-sm-1 col-form-label">Tipo de Exercicio</label>
                    <div class="col-sm-11"><select class="form-control m-b" name="TipoExercicio" onchange="mostraExercicio(this)">
                        <option value="1">Alternativa</option>
                        <option value="2">Dissertativa</option>
                    </select></div>
                    <div id="main">                                                          
                    </div>                    
                    <input type="button" id="btAdd" value="Adicionar" class="bt" />
                    <br><br>
                    <input type="button" id="btSave" value="SALVAR" class="bt" onclick="salvar()" />

                    <div class="hr-line-dashed" id="linha2"></div> 

                    <label  id=dissertativa1 class="col-sm-1 col-form-label">Resposta</label>
                    <textarea class="col-sm-8" name="text" id="dissertativa2"cols="50" rows="5" ></textarea></div><label  id="check" ><input class="i-checks" type="radio" value="0" checked> <i></i></label>

                <div class="form-group row" id="videopath">
                    <label class="col-sm-1 col-form-label" >Video Path</label>
                    <div class="col-sm-11"><input type="text" name="VideoPath" class="form-control"></div>
                </div>

                    <div class="hr-line-dashed"></div> 

                <div class="form-group row" id="respostaID">
                    <label class="col-sm-1 col-form-label" >RespostaID</label>
                    <div class="col-sm-11"><input type="text" name="RespostaID" class="form-control"></div>
                </div>


                <div class="hr-line-dashed" id="linha"></div>  

                <div class="form=group row">
                    <div class="col-sm-1 col-sm-offset-10">
                            <button type="button" class="btn btn-danger block full-width m-b">Cancelar</button>
                    </div> 
                    <div class="col-sm-1 ">
                        <button type="submit" class="btn btn-primary block full-width m-b">Salvar</button>
                    </div>  
                </div>
            
            
            </form> 

            <script>function mostraCampo(el) {
                if(el.value == '1') {
                  document.getElementById('exercicio').style.display ='block';
                  document.getElementById('videopath').style.display ='none';
                  document.getElementById('respostaID').style.display ='none';
                  document.getElementById('linha').style.display ='none';

                }
                else {
                  document.getElementById('exercicio').style.display = 'none';
                  document.getElementById('videopath').style.display = 'block';
                  document.getElementById('respostaID').style.display = 'block';
                  document.getElementById('linha').style.display = 'block';

                }
              };
            </script>

            <script>function mostraExercicio(el) {
                    if(el.value == '1') {
                    document.getElementById('main').style.display ='block';
                    document.getElementById('btAdd').style.display ='block';
                    document.getElementById('btSave').style.display ='block';
                    document.getElementById('dissertativa1').style.display ='none';
                    document.getElementById('dissertativa2').style.display ='none';
                    document.getElementById('linha2').style.display = 'none';
                    document.getElementById('check').style.display = 'none';
                    }
                    else {
                    document.getElementById('main').style.display ='none';
                    document.getElementById('btAdd').style.display ='none';
                    document.getElementById('btSave').style.display ='none';
                    document.getElementById('dissertativa1').style.display ='block';
                    document.getElementById('dissertativa2').style.display ='block';;
                    document.getElementById('linha2').style.display = 'block';
                    document.getElementById('check').style.display = 'block';
                    }
                };
            </script>
        
            <script>
                    $(document).ready(function() {
                
                        var iCnt = 0;
                                                    
                        $('#btAdd').click(function() {
                                                                    
                            iCnt = iCnt+1;
                            $('#main').append('<p><input type=text class="input lista" id=tb' + iCnt + ' ' +
                                'value="Text Element ' + iCnt + '" /> <input type="button" value="remover" class="btn fa-time" id=rm' + iCnt + ' '+ 'onclick="remover(' + iCnt + ')" /></p>');
                        });                                            
                    });
            </script>  

            <script>
                function remover(item) {
                        $("#tb"+item).remove();
                        $("#rm"+item).remove();                                               
                    }
                    function salvar(){
                        var quantidade = document.getElementsByClassName("lista").length;
                        document.getElementById("valor").value = quantidade; 
                    }
                    
            </script>           
        </div>
        </div>
</div>
</div>
</div>

@endsection