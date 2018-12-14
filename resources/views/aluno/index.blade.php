@extends('layouts.app')
@section('title', 'ALUNO')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                INDEX ALUNOS
                            </h1>
                            <small>
                                TESTE DE ROTA ALUNOS
                            </small>
                        </div>
                        <div class="team-member">
                            <ul>
                                @foreach ($aluno as $item)
                                    <li>{{ $item->title}}</li>
                                @endforeach
                               

                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
@endsection