<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [ 'id',
    'nome',
    'descricao',
    'preco'];
    protected $table = 'Produtos';
    
    public function produtosPedido(){

        return $this->hasMany(ProdutosVenda::class, 'produto_id');
    }
  
}
