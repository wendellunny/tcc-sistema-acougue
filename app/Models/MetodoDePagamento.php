<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoDePagamento extends Model
{
    use HasFactory;
    protected $table = 'metodos_de_pagamentos';
    protected $fillable = [
        'nome'
    ];
}
