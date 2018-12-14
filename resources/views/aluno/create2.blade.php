@extends('layouts.app')
@section('title', 'Create')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Cadastro do aluno
                            </h1>
                            
                        </div>

                        <div class="middle-box text-center animated fadeInRightBig">                                
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox ">
                                    </div>
                                        <div class="ibox-content">
                                            <form method="get">
                                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Nome</label>
                
                                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                                </div>                                                                   
                                             </form>

                                              <button type="submit" class="btn btn-primary block full-width m-b">Salvar</button>                
                                        </div>
                                    </div>
                             </div>
                         </div>
                    </div> 
                </div>
    </div>
@endsection

