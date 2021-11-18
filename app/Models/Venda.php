<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'funcionario_id',
        'cliente_id',
        'metodo_de_pagamento_id',
        'desconto',
        'valor',
        'quantidade_de_parcelas',
    ];

    public function cliente(){
        $this->hasOne(Cliente::class,'id','cliente_id');
    }
}
