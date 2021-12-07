@extends('app.layouts.basic')

@section('title', 'Pedido Produto')

@section('content')
    <div class="titulo-pagina-app">
        <p>Pedido Produto - Adicionar</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('pedido.index')}}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <h4>Detalhes do pedido</h4>
        <p>ID do Pedido: {{$pedido->id}}</p>
        <p>Cliente: {{$pedido->cliente_id}}</p>

        <div style="width: 30%; margin-left: auto; margin-right: auto">
            @component('app.pedido_produto._components.form_create',['pedido'=>$pedido,'produtos'=>$produtos])
            @endcomponent
            <h4>Itens do pedido</h4>
            <table border="1" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Produto</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pedido->produtos as $produto)
                    <tr>
                        <td>{{$produto->id}}</td>
                        <td>{{$produto->nome}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
