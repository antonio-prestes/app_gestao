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
                {{$msg}}
                <form action="{{route('app.fornecedor.adicionar')}}" method="post">
                    @csrf
                    <input type="text" name="nome" value="{{old('nome')}}" placeholder="Nome" class="borda-preta"></input>
                    {{ $errors->has('nome') ? $errors->first('nome') : ''}}
                    <input type="text" name="site" value="{{old('site')}}" placeholder="Site" class="borda-preta"></input>
                    {{ $errors->has('site') ? $errors->first('site') : ''}}
                    <input type="text" name="uf" value="{{old('uf')}}" placeholder="UF" class="borda-preta"></input>
                    {{ $errors->has('uf') ? $errors->first('uf') : ''}}
                    <input type="text" name="email" value="{{old('email')}}" placeholder="E-mail" class="borda-preta"></input>
                    {{ $errors->has('email') ? $errors->first('email') : ''}}
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
