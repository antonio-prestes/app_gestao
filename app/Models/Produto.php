<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'preco_venda', 'estoque_minimo', 'estoque_maximo','fornecedor_id'];

    public function produtoDetalhe() {
        return $this->hasOne('App\Models\ProdutoDetalhe');
    }
}
