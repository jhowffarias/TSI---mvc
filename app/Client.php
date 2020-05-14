<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'endereco',
        'email',
        'telefone'
    ];

    protected $table = 'clients';

    public function sells() {
        return $this->hasMany(Sell::class, 'cliente_id');
    }

    public function favorites() {
        return $this->hasMany(Favorite::class, 'produto_id');
    }

}
