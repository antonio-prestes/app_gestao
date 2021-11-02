@extends('app.layouts.basic')

@section('title', 'Produtos')

@section('content')
    <div class="titulo-pagina-app">
            <p>Produto - Adicionar</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('produto.index')}}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto">
            @component('app.produto._components.form_create_edit', ['unidades' => $unidades])
            @endcomponent
        </div>
    </div>
@endsection
