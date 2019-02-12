@extends('layouts.app')
@section('title', 'Lista de Conteudo')
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Lista de Conteudo</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Início</a>
            </li>
            <li class="breadcrumb-item">
                <a>Conteudo</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Listagem com todos os conteudo</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox">
                <div class="ibox-content">                   
                    <h2>Conteudo</h2>
                    <p>
                        Todos os tipos de conteudo.
                    </p>
                    <div class="col-sm-1 col-sm-offset-11">
                            <a href="/conteudo/create"><button type="button" class="btn btn-primary block full-width m-b">Cadastrar</button></a>
                    </div> 
                    <div class="input-group">                            
                    </div>
                    <div class="clients-list">
                    <ul class="nav nav-tabs">
                    </ul>
                    <div class="tab-content" >
                        <div id="tab-1" class="tab-pane active" style="height:500px;">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                        @foreach ($conteudo as $item)      
                                            <tr>
                                                <td><a href="#contact-1" class="client-link">{{$item->titulo}}</a></td>                                                
                                                <td> {{ $item->descricao}}</td>
                                                @if ($item->tipo_conteudo =="Exercicio")
                                                <td class="client-status"><span class="label label-primary">{{$item->tipo_conteudo}}</span></td> 
                                                @elseif ($item->tipo_conteudo =="Video Aula")
                                                <td class="client-status"><span class="label label-success">{{$item->tipo_conteudo}}</span></td>
                                                @else   
                                                <td class="client-status"><span class="label label-info">{{$item->tipo_conteudo}}</span></td>
                                                @endif     
                                                <td><a href="conteudo/{{$item->id}}/edit" class="btn btn-white btn-bitbucket"><i class="fa fa-wrench"></i></td>                                                                                                                        
                                            </tr>    
                                        @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>


@endsection