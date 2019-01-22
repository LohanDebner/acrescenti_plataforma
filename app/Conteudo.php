<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    //
    public function respostas()
    {
        return $this->hasMany(Respostas::class, 'conteudo_id');
    }
}
