<?php
//php artisan make:controller NovoController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NovoController extends Controller
{
    public function novo()
    {
        $tasks = [
            'tarefa 1',
            'tarefa 2',
            'tarefa 3',
            'tarefa Novo'
        ];

        $parameter = request('parametro');

        //return view('outros/contato',['tasks'=>$tasks], ['parametro'=>$parameter]); 
        return view('outros/contato')->withTasks($tasks)->withParametro($parameter);
    }
}
