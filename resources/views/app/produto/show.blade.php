@extends('app.layouts.basic')

@section('title', 'Produtos')

@section('content')
    <div class="titulo-pagina-app">
        <p>Produto - Visualizar</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('produto.index')}}">Voltar</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto">
            <table border="1" style="text-align: left">
                <tr>
                    <td>ID:</td>
                    <td>{{$produto->id}}</td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td>{{$produto->nome}}</td>
                </tr>
                <tr>
                    <td>Descrição:</td>
                    <td>{{$produto->descricao}}</td>
                </tr>
                <tr>
                    <td>Unidade de medidade:</td>
                    <td>{{$produto->unidade_id}}</td>

                </tr>
                <tr>
                    <td>Peso:</td>
                    <td>{{$produto->peso}}</td>
                </tr>
                <tr>
                    <td>Preço:</td>
                    <td>{{$produto->preco_venda}}</td>
                </tr>
                <tr>
                    <td>Estoque Mínimo:</td>
                    <td>{{$produto->estoque_minimo}}</td>
                </tr>
                <tr>
                    <td>Estoque Máximo:</td>
                    <td>{{$produto->estoque_maximo}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
