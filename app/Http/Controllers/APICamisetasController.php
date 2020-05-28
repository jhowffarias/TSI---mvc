<?php

namespace App\Http\Controllers;

use App\Camisetas;
use Illuminate\Http\Request;

class APICamisetasController extends Controller
{
    public function index()
    {
        return Camisetas::all();
    }

    public function store(Request $request)
    {
        $json = $request->getContent();

        return Camisetas::create(
            json_decode( $json, JSON_OBJECT_AS_ARRAY));
    }

    public function show($id)
    {
        $camiseta = Camisetas::find($id);

        if ($camiseta) {
            return $camiseta;
        } else {
            return json_encode([$id => 'não existe']);
        }
    }

    public function update(Request $request, $id)
    {
        $camiseta = Camisetas::find($id);

        if ($camiseta) {
            $json = $request->getContent();
            $update = json_decode($json, JSON_OBJECT_AS_ARRAY);
            $camiseta->marca = $update['marca'];
            $camiseta->cor = $update['cor'];
            $camiseta->preco = $update['preco'];
            $ret = $camiseta->update() ? [$id, 'atualizado com sucesso'] : [$id, 'Erro ao atualizar'];
        } else {
            $ret = [$id, 'não encontrado'];
        }

        return json_encode($ret);
    }

    public function destroy($id)
    {
        $camiseta = Camisetas::find($id);
        if ($camiseta) {
            $ret = $camiseta->delete() ? [$id => 'Excluido com sucesso'] : [$id => 'erro'];
        } else {
            $ret = [$id => 'não existe'];
        }
        return json_encode($ret);
    }
}
