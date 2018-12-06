
@extends('layouts.app')
@section('title', 'PROJECTS')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                VIEW PROJECTS
                            </h1>
                            <small>
                                Testando criação de MVC
                            </small>
                        </div>
                        <div class="team-member">
                            <ul>
                                @foreach ($projeto as $item)
                                    <li>{{ $item->title}}</li>
                                @endforeach
                               

                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
@endsection
