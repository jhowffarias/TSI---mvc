@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Informações sobre a camiseta</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('camisetas.index') }}">Retornar</a>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Marca:</strong>

            {{ $camiseta->marca }}

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cor:</strong>

            {{ $camiseta->cor }}

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Preço:</strong>
            {{ $camiseta->preco}}
        </div>
    </div>
</div>

@endsection
