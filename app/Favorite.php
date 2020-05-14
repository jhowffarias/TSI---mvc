<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'id',
        'produto_id'
    ];

    protected $table = 'favorites';
}
