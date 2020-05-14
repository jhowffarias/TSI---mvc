<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'preco'
    ];

    protected $table = 'products';
}
