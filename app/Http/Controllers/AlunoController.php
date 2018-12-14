<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        /* $aluno = new Aluno();
        $aluno->nome = request('nome');
        $aluno->CPF = request('CPF');
        $aluno->RG = request('RG');
        $aluno->Emissor = request('Emissor');
        $aluno->Sexo = request('Sexo');
        $aluno->Nascimento = request('Nascimento');
        $aluno->Telefone1 = request('Telefone1');
        $aluno->Telefone2 = request('Telefone2');
        $aluno->Telefone3 = request('Telefone3');
        $aluno->Email = request('Email');
        $aluno->CEP = request('CEP');
        $aluno->Endereco = request('Endereco');
        $aluno->EnderecoNum = request('EnderecoNum');
        $aluno->EnderecoComp = request('EnderecoComp');
        $aluno->Bairro = request('Bairro');
        $aluno->Cidade = request('Cidade');
        $aluno->Estado = request('Estado');
        $aluno->DataIngresso = request('DataIngresso');
        $aluno->NomeResponsavel = request('NomeResponsavel');
        $aluno->CPFResponsavel = request('CPFResponsavel');

        $aluno->save();

        return "Cadastrado com Sucesso!"; */

        /* dd(request()->all()); */
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('Aluno.create', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aluno = Aluno::find($id);
        $aluno->nome = request('nome');
        $aluno->CPF = request('CPF');
        $aluno->RG = request('RG');
        $aluno->Emissor = request('Emissor');
        $aluno->Sexo = request('Sexo');
        $aluno->Nascimento = request('Nascimento');
        $aluno->Telefone1 = request('Telefone1');
        $aluno->Telefone2 = request('Telefone2');
        $aluno->Telefone3 = request('Telefone3');
        $aluno->Email = request('Email');
        $aluno->CEP = request('CEP');
        $aluno->Endereco = request('Endereco');
        $aluno->EnderecoNum = request('EnderecoNum');
        $aluno->EnderecoComp = request('EnderecoComp');
        $aluno->Bairro = request('Bairro');
        $aluno->Cidade = request('Cidade');
        $aluno->Estado = request('Estado');
        $aluno->DataIngresso = request('DataIngresso');
        $aluno->NomeResponsavel = request('NomeResponsavel');
        $aluno->CPFResponsavel = request('CPFResponsavel');

        $aluno->save();

        return redirect ('/aluno.create');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
