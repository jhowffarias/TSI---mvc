<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'id',
        'nome'
    ];

    protected $table = 'sellers';
}
