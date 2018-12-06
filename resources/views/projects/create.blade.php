
@extends('layouts.appLogin')
@section('title', 'Create')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Login
                            </h1>
                            <small>
                                Logar na plataforma
                            </small>
                        </div>

                        <div class="middle-box text-center loginscreen animated fadeInDown">
                                

                            <form class="m-t" role="form" action="/projects" method="POST">
                                {{csrf_field()}} 

                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" placeholder="Title" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="description" class="form-control" placeholder="Descrição" required="">
                                </div>
                                <button type="submit" class="btn btn-primary block full-width m-b">Salvar</button>
                
                                <a href="#" hidden><small>Forgot password?</small></a>
                                    
                            </form>
                              
                        </div>
                        
                    </div>
                </div>
            </div>
@endsection

