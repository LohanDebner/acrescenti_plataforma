@extends('layouts.app')
@section('title', 'aluno')
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
        <h2>Lista de Alunos</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Início</a>
            </li>
            <li class="breadcrumb-item">
                <a>Aluno</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Listagem com todos os alunos</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-sm-8">
            <div class="ibox">
                <div class="ibox-content">                   
                    <h2>Alunos</h2>
                    <p>
                        Alunos ativos ou inativos.
                    </p>
                    <div class="input-group">
                    </div>
                    <div class="clients-list">
                    <ul class="nav nav-tabs">
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                        <tr>
                                            @foreach ($aluno as $item)                                                
                                           
                                            <td><a href="#contact-1" class="client-link">{{ $item->Nome}}</a></td>
                                            <td> {{ $item->Telefone1}}</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> {{ $item->Email}}</td>
                                            @if ($item->Status =="Ativo")
                                            <td class="client-status"><span class="label label-primary">{{ $item->Status}}</span><td> 
                                            @else
                                            <td class="client-status"><span class="label label-danger">{{ $item->Status}}</span></td>   
                                            @endif     
                                            <td><a href="{{$item->id}}/edit" class="btn btn-white btn-bitbucket"><i class="fa fa-wrench"></i></td>                                                                     
                                        </tr>                                       
                                        </tbody>
                                        @endforeach
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
