@extends('app.layouts.basic')

@section('title', 'Pedido')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <p>Clientes</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('pedido.create')}}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto">
                <table border="1" width="100%">
                    <thead>
                    <tr>
                        <th>ID Pedido</th>
                        <th>Cliente</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pedidos as $pedido)
                        <tr>
                            <td>{{$pedido->id}}</td>
                            <td>{{$pedido->cliente_id}}</td>
                            <td><a href="{{route('pedido-produto.create',['pedido'=>$pedido->id])}}">Adicionar Poduto</a></td>
                            <td><a href="">Editar</a></td>
                            <td>
                                <form id="form_{{$pedido->id}}"
                                      method="post"
                                      action="{{ route('pedido.destroy', ['pedido'=>$pedido->id]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <a href="#" onclick="document.getElementById('form_{{$pedido->id}}').submit()">Excluir</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                {{ $pedidos->appends($request)->links() }}
                <br>
                Exibindo {{$pedidos->count()}} pedidos de {{$pedidos->total()}}
                ({{$pedidos->firstItem()}} a {{$pedidos->lastItem()}})
            </div>
        </div>
    </div>
@endsection
