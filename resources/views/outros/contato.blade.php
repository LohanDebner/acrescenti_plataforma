@extends('layouts.app')

@section('title', 'Contato')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Contato do plataforma-1
                            </h1>
                            <small>
                                Teste INDO para o KINGHOST
                            </small>
                        </div>
                        <div class="team-member">
                            <ul>
                                @foreach($tasks as $task)
                                    <!--<li><?= $task; ?></li>-->
                                    <li>{{ $task }}</li>
                                @endforeach

                                <li>{{ $parametro }}</li>

                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
@endsection
