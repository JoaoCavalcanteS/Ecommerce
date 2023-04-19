<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table ='PRODUTO';  //fazer com que ele reconheça a tabela do banco e trocar o nome da tabela
    protected $primaryKey ='produtoId';
    public $timestamps = false;

    // public function ProdutoImagem(){
    //     return $this->hasMany(ProdutoImagem::class,'produtoId','produtoId');//as colunas q se ligam
    //     // belongs to many é tipo uma categoria pertence para varios produtos
    //     //hasMany varias imagens para um produto
    // }

    public function ProdutoEstoque(){
        return $this->hasOne(ProdutoEstoque::class,'produtoId','produtoId');

    }
}
