<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    //definir o numero de colunas/ nome das colunas   
    protected $fillable =['id', 'nome','descricao','preco',];

    // nome da tabela 
    protected $table = 'produtos';
}
