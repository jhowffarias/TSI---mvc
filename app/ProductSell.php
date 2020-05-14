<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSell extends Model
{
    protected $fillable = [
        'id',
        'venda_id',
        'produto_id',
        'quantidade',
        'valor'
    ];

    protected $table = 'product_sells';

}
