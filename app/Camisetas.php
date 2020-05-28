<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camisetas extends Model
{
    protected $fillable = [
        'id',
        'marca',
        'cor',
        'preco'
    ];

    protected $table = "camisetas";
}
