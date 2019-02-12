@extends('layouts.app')
@section('title', 'Show')
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>{{$conteudo->titulo}}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Início</a>
            </li>
            <li class="breadcrumb-item">
                <a>Conteudo</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>{{$conteudo->titulo}}</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
            <form class="m-t" role="form" action="/conteudo/{{$conteudo->id}}" method="POST" id="formPrincipal">
                <div class="ibox-content">  
                    <div class="form-group  row">
                        <h5>&nbsp;&nbsp;&nbsp;&nbsp;{{$conteudo->origem}}</h5>
                    <br>
                        <h2>&nbsp;&nbsp;{{$conteudo->descricao}}</h2>
                        <div class="col-sm-1 col-sm-offset-9">
                            <button class="btn btn-default " type="button"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Voltar</button>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-info" style="width: 100%;" type="button"> Próximo Conteúdo&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                <div class="form-group  row">
                    <div class="col-lg-12">
                        @switch({{$conteudo->tipo_conteudo}})
                            @case(1)
                                @if ({{$conteudo->tipo_exercicio}} ="2")
                                <div class="col-sm-10"><textarea rows="3" cols="40" name="RespostaDissertativa" id="resposta_dissertativa" class="form-control"></textarea></div>
                                <div class="col-sm-1 ">
                                    <button type="submit" id="botao_resposta_dissertativa" class="btn btn-primary block full-width m-b">Salvar</button>
                                </div>  
                                    
                                @elseif($conteudo->quantidade_respostas = ‘1’) 


                                @else
                                    
                                @endif
                                @break
                            @case(2)
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="{{$conteudo->video_path}}" width="300" height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                                @break
                            @case(3)
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="{{$conteudo->video_path}}" width="300" height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                                @break
                            @default
                                
                        @endswitch
                        <br/>
                        @foreach($dica as $DicaItem)
                        <div class="panel panel-warning" name="Dica{{$loop->iteration}}" id="Dica{{$loop->iteration}}">
                            <div class="panel-heading" style="height:25px; padding:1px; padding-left:5px;">
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">Dica&nbsp;{{$loop->iteration}}</a>
                                </h5>
                            </div>
                            <div id="collapse{{$loop->iteration}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {{$DicaItem->descricao}}                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>    
                </div>                            
                    <div class="form-group  row">
                        <div class="col-sm-1 col-sm-offset-9">
                            <button class="btn btn-default " type="button"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Voltar</button>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-info" style="width: 100%;" type="button"> Próximo Conteúdo&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>

                <script>
                    var min;
                    function minuscula() {
                        min = document.getElementById("resposta_dissertativa");
                        min.value = min.value.toLowerCase();                        
                    }

                </script>

            </form>
            </div>
        </div>
    </div>
</div>


 
@endsection
