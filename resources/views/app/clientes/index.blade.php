@extends('app.layouts.basic')

@section('title', 'Cliente')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <p>Clientes</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('clientes.create')}}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left: auto; margin-right: auto">
                <table border="1" width="100%">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->nome}}</td>

                            <td><a href="">Vizualizar</a></td>
                            <td><a href="">Editar</a></td>
                            <td>
                                <form id="form_{{$cliente->id}}"
                                      method="post"
                                      action="">
                                    @method('DELETE')
                                    @csrf
                                    <a href="#" onclick="document.getElementById('form_{{$cliente->id}}').submit()">Excluir</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                {{ $clientes->appends($request)->links() }}
                <br>
                Exibindo {{$clientes->count()}} fornecedores de {{$clientes->total()}}
                ({{$clientes->firstItem()}} a {{$clientes->lastItem()}})
            </div>
        </div>
    </div>
@endsection
