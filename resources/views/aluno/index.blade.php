@extends('layouts.app')
@section('title', 'aluno')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                INDEX ALUNOS
                            </h1>
                            <small>
                                TESTE DE VIEW BD
                            </small>
                        </div>
                        <div class="team-member">
                            <ul>
                                @foreach ($aluno as $item)
                                    <li>{{ $item->Nome}}</li>
                                    <li>{{ $item->CPF}}</li>
                                    <li>{{ $item->RG}}</li>
                                    <li>{{ $item->EmissorRG}}</li>
                                    <li>{{ $item->Sexo}}</li>
                                    <li>{{ $item->DataNascimento}}</li>
                                    <li>{{ $item->Telefone1}}</li>
                                    <li>{{ $item->Telefone2}}</li>
                                    <li>{{ $item->Telefone3}}</li>
                                    <li>{{ $item->Email}}</li>
                                    <li>{{ $item->CEP}}</li>
                                    <li>{{ $item->Endereco}}</li>
                                    <li>{{ $item->EnderecoNum}}</li>
                                    <li>{{ $item->EnderecoComp}}</li>
                                    <li>{{ $item->Bairro}}</li>
                                    <li>{{ $item->Cidade}}</li>
                                    <li>{{ $item->Estado}}</li>
                                    <li>{{ $item->DataIngresso}}</li>
                                    <li>{{ $item->NomeResponsavel}}</li>
                                    <li>{{ $item->CPFResponsavel}}</li>

                                @endforeach
                               

                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
@endsection