
@extends('layouts.app')
@section('title', 'EDIT')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                EDITANDO
                            </h1>
                            <small>
                                Testando criação de MVC
                            </small>
                        </div>
                        <div class="middle-box text-center loginscreen animated fadeInDown">
                                

                        <form class="m-t" role="form" action="/projects/{{$project->id}}" method="POST">
                            
                            {{csrf_field()}} 
                            {{method_field('PATCH')}}

                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Title" required="" value="{{ $project->title}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="description" class="form-control" placeholder="Descrição" required="" value="{{$project->description}}">
                            </div>

                            <button type="submit" class="btn btn-w-m btn-success block full-width m-b">Salvar</button>
                        </form>
                        <form method="POST" action="/projects/{{$project->id}}">
                            
                            {{csrf_field()}} 
                            {{method_field('DELETE')}}

                            <button type="submit" class="btn btn-outline btn-danger btn-xs block full-width m-b">Deletar</button>
                        </form>

                        <a href="#" hidden><small>Forgot password?</small></a>
                                    
                            
                              
                        </div>
                    </div>
                </div>
            </div>
@endsection
