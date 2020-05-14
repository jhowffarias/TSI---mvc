<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function listar() {
        $produtos = Product::all();

        return view ('produtos.listar', ['produtos' => $produtos]);
    }
}
