@extends('layouts.app')
@section('content')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th> Nome </th>
            <th> Endereço </th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td> {{ $cliente->nome }} </td>
            <td> {{ $cliente->endereco }} </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
