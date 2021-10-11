@extends('app.layouts.basic')

@section('title', 'Fornecedor')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <p>Fornecedor - Adicionar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedor.adicionar')}}">Novo</a></li>
                <li><a href="{{route('app.fornecedor')}}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                <form action="" method="post">
                    <input type="text" name="nome" placeholder="Nome" class="borda-preta"></input>
                    <input type="text" name="site" placeholder="Site" class="borda-preta"></input>
                    <input type="text" name="uf" placeholder="UF" class="borda-preta"></input>
                    <input type="text" name="email" placeholder="E-mail" class="borda-preta"></input>
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
