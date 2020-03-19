<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    protected $fillable = [ 'id',
    'nome'];
protected $table = 'Vendedores';


public function vendasVendedores(){

    return $this->hasMany(Vendas::class, 'vendedor_id');
}

}
