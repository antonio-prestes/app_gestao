<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemDetalhe extends Model
{
    protected $table = 'produto_detalhes';
    protected $fillable = ['altura', 'comprimento', 'largura', 'produto_id', 'unidade_id'];

    public function item()
    {
        return $this->belongsTo('App\Models\Item', 'produto_id', 'id');
    }
}
