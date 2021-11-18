<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'quantidade',
        'peso_unidade',
        'fornecedor_id',
        'preco',
    ];


    public function fornecedores(){
        $this->hasOne(Fornecedor::class,'id','fornecedor_id');
    }
}
