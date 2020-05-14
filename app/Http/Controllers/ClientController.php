<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function listar() {
        $clientes = Client::all();

        return view ('clientes.listar', ['clientes' => $clientes]);
    }
}
