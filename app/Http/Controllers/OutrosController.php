<?php

namespace App\Http\Controllers;

class OutrosController extends Controller
{
    public function contato(){
        $tasks = [
            'tarefa 1',
            'tarefa 2',
            'tarefa 3'
        ];
        return view('outros/contato',['tasks'=>$tasks]);
    }
}

