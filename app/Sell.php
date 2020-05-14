<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'data_da_venda',
        'vendedor_id'
    ];

    protected $table = 'Sells';

    public function client() {
        return $this->belongsTo(Client::class, 'cliente_id');
    }

    public function comprovant() {
        return $this->hasOne(Comprovant::class, 'venda_id');
    }

    public function seller() {
        return $this->hasOne(Seller::class, 'id');
    }

    public function productSell()
    {
        return $this->hasMany(ProductSell::class, 'venda_id');
    }

}
