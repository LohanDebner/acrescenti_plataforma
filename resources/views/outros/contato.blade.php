@extends('layouts.app')

@section('title', 'Contato')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Contato
                            </h1>
                            <small>
                                Contato Teste2
                            </small>
                        </div>
                        <div class="team-member">
                            <ul>
                                @foreach($tasks as $task)
                                    <li><?= $task; ?></li>
                                @endforeach
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
@endsection
