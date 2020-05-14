<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comprovant extends Model
{
    protected $fillable = [
        'id',
        'venda_id',
        'valor',
        'imposto'
    ];

    protected $table = 'comprovants';

}
