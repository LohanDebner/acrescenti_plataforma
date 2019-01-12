<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Conteudo;

class ConteudoController extends Controller
{
    public function index()
    {
        $conteudo = Conteudo::all();


        return view('conteudo.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $conteudo = new Conteudo();
        $conteudo->Titulo = request('Titulo');
        $conteudo->Origem = request('Origem');
        $conteudo->Descricao = request('Descricao');
        $conteudo->TipoConteudo = request('TipoConteudo');
        $conteudo->TipoExercicio = request('TipoExercicio');
        $conteudo->VideoPath = request('VideoPath');
        $conteudo->RespostaID = request('RespostaID');

        $conteudo->save();

        return redirect ('/conteudo');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
