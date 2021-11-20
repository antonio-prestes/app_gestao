@extends('app.layouts.basic')

@section('title', 'Cliente')

@section('content')
    <div class="titulo-pagina-app">
        <p>Produto - Adicionar</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('clientes.index')}}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto">
            @component('app.clientes._components.form_create_edit')
            @endcomponent
        </div>
    </div>
@endsection
