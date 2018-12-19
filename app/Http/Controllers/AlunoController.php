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
      $aluno = Aluno::all();
      return view('aluno.index',['aluno'=>$aluno]);
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
        $aluno = new Aluno();
        $aluno->nome = request('nome');
        $aluno->CPF = request('CPF');
        $aluno->RG = request('RG');
        $aluno->EmissorRG = request('EmissorRG');
        $aluno->Sexo = request('Sexo');
        $dataNascimento= request('DataNascimento');
        $dataNascimento= explode("/",$dataNascimento);       
        $aluno->DataNascimento = $dataNascimento[2]."-".$dataNascimento[1]."-".$dataNascimento[0];
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
        $dataIngresso= request('DataIngresso');
        $dataIngresso= explode("/",$dataIngresso);
        $aluno->DataIngresso = $dataIngresso[2]."-".$dataIngresso[1]."-".$dataIngresso[0];
        $aluno->NomeResponsavel = request('NomeResponsavel');
        $aluno->CPFResponsavel = request('CPFResponsavel');

        $aluno->save();

        return redirect ('/aluno');

        //return "Cadastrado com Sucesso!"; 

         // dd(request()->all()); 
        //return view('projects.create');
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

        return view('aluno.edit', compact('aluno'));
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
        $aluno = new Aluno();
        $aluno->nome = request('nome');
        $aluno->CPF = request('CPF');
        $aluno->RG = request('RG');
        $aluno->EmissorRG = request('EmissorRG');
        $aluno->Sexo = request('Sexo');
        $dataNascimento= request('DataNascimento');
        $dataNascimento= explode("/",$dataNascimento);       
        $aluno->DataNascimento = $dataNascimento[2]."-".$dataNascimento[1]."-".$dataNascimento[0];
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
        $dataIngresso= request('DataIngresso');
        $dataIngresso= explode("/",$dataIngresso);
        $aluno->DataIngresso = $dataIngresso[2]."-".$dataIngresso[1]."-".$dataIngresso[0];
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
        Aluno::find($id)->delete();
        return redirect('/aluno');
    }
}
