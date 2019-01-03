<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index');
        /*
        $tasks = [
            'tarefa 1',
            'tarefa 2',
            'tarefa 3',
            'tarefa Novo'
        ];

        $parameter = request('parametro');

        //return view('outros/contato',['tasks'=>$tasks], ['parametro'=>$parameter]); 
        return view('outros/contato')->withTasks($tasks)->withParametro($parameter);
        */
    }

    public function minor()
    {
        return view('home/minor');
    }
}
