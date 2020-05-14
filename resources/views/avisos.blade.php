
    @extends('layouts.externo')
    @section('title', 'Quadro de avisos da Empresa')

    @section('sidebar')
        @parent
        <p> ^^ Barra superior adicionada da pasta de Layous </p>
    @endsection
    @section('content')
        <p> Quadro de avisos da empresa </p>
        <p> Olá, {{ $nome }}, seja bem-vindo! </p>
    @endsection

    @if ($mostrar)
        Mostrando aviso
        @else
        Escondendo aviso
    @endif

    @foreach ($avisos as $aviso)
        <p> Aviso {{ $aviso['id'] }}:{{ $aviso['texto']}} </p>
    @endforeach
