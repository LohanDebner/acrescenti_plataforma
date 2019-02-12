<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    //
    public function respostas()
    {
        return $this->hasMany(Resposta::class, 'conteudo_id');
    }

    public function dicas()
    {
        return $this->hasMany(ExercicioDica::class,'conteudo_id');
    }
}
