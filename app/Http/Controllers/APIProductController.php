<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class APIProductController extends Controller
{
    public function listar()
    {
        return Product::all();
    }
}
