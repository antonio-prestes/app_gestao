@extends('site.layouts.basic')

@section('title',$title)
@section('content')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>
        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contact',['classe'=>'borda-preta', 'motivo_contatos'=>$motivo_contatos])
                    <p>A nossa equipe analisará a sua mensagem e retornaremos em breve</p>
                    <p>Nosso tempo médio de resposta é de 5 horas.</p>
                @endcomponent
            </div>
        </div>
    </div>

    @include('site.layouts._partials.footer')
@endsection
