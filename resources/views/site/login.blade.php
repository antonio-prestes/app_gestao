@extends('site.layouts.basic')

@section('title',$title)
@section('content')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                <form action="{{ route('site.login') }}" method="post">
                    @csrf
                    <input type="text" value="{{old('user')}}" name="user" placeholder="Usuário" class="borda-preta">
                    {{ $errors->has('user') ? $errors->first('user') : ''}}
                    <input type="password" value="{{old('password')}}" name="password" placeholder="Senha"
                           class="borda-preta">
                    {{ $errors->has('password') ? $errors->first('password') : ''}}
                    <button type="submit">Entrar</button>
                </form>
                {{isset($erro) && $erro != '' ? $erro : '' }}
            </div>
        </div>
    </div>

    @include('site.layouts._partials.footer')
@endsection
