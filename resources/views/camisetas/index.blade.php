@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Camisetas Legais</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('camisetas.create') }}">Adicionar camiseta</a>
        </div>
    </div>
</div>

<br>

@if ($message = Session::get('success'))

<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>

@endif


<table class="table table-bordered">

    <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Cor</th>
        <th>Preço</th>
        <th width="280px">Açoes</th>
    </tr>

    @foreach ($camisetas as $camiseta)

    <tr>
        <td>{{ $camiseta->id }}</td>
        <td>{{ $camiseta->marca }}</td>
        <td>{{ $camiseta->cor }}</td>
        <td>{{ $camiseta->preco }}  </td>

        <td>
            <a class="btn btn-info" href="{{ route('camisetas.show',$camiseta->id) }}">Mostrar</a>
            <a class="btn btn-primary" href="{{ route('camisetas.edit',$camiseta->id) }}">Editar</a>

            {!! Form::open(['method' => 'DELETE','route' => ['camisetas.destroy', $camiseta->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </td>
    </tr>

    @endforeach

</table>

{!! $camisetas->render() !!}

@endsection
