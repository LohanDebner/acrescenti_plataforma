<?php

namespace App\Http\Controllers;

class OutrosController extends Controller
{
    public function contato(){
        $tasks = [
            'tarefa 1',
            'tarefa 2',
            'tarefa 3',
            'tarefa 4'
        ];

        $parameter = request('parametro');

        //return view('outros/contato',['tasks'=>$tasks], ['parametro'=>$parameter]); 
        return view('outros/contato')->withTasks($tasks)->withParametro($parameter);
    }
}

