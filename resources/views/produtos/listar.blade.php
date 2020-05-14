@extends('layouts.app')
@section('content')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th> Nome </th>
            <th> Descrição </th>
            <th> Preço </th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td> {{ $produto->nome }} </td>
                <td> {{ $produto->descricao }} </td>
                <td> {{ $produto->preco }} </td>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
