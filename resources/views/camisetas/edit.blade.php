@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Camiseta</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('camisetas.index') }}">Retornar</a>
        </div>
    </div>
</div>
<br>

@if (count($errors) > 0)

<div class="alert alert-danger">
    <strong>Ops!</strong>Algo errado com os dados.<br><br>
    <ul>
        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>

@endif


{!! Form::model($camiseta, ['method' => 'PATCH','route' => ['camisetas.update', $camiseta->id]]) !!}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Marca:</strong>
            {!! Form::text('marca', null, array('placeholder' => 'Marca','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cor:</strong>
            {!! Form::text('cor', null, array('placeholder' => 'Cor','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Preço:</strong>
            {!! Form::text('preco', null, array('placeholder' => 'Preço','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>

</div>

{!! Form::close() !!}

@endsection
