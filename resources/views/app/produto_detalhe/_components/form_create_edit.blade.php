@if(isset($produto->id))
    <form action="{{route('produto.update', ['produto'=>$produto_detalhe->id])}}" method="post">
        @csrf
        @method('PUT')
        @else
            <form action="{{route('produto_detalhe.store')}}" method="post">
                @csrf
                @endif
                <input type="text" name="nome" value="{{$produto_detalhe->nome ?? old('nome')}}" placeholder="Nome"
                       class="borda-preta"/>
                {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                <input type="text" name="descricao" value="{{$produto_detalhe->descricao ?? old('descricao')}}"
                       placeholder="Descrição"
                       class="borda-preta"/>
                {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

                <select name="unidade_id">
                    <option value="">Selecione a unidade de medida</option>
                    @foreach($unidades as $unidade)
                        <option value="{{$unidade->id}}">{{$unidade->descricao}}</option>
                    @endforeach
                </select>

                <input type="number" name="peso" value="{{ $produto_detalhe->peso ?? old('peso')}}" placeholder="Peso"
                       class="borda-preta"/>
                {{ $errors->has('peso') ? $errors->first('peso') : '' }}
                <input type="number" name="estoque_minimo"
                       value="{{ $produto_detalhe->estoque_minimo ?? old('estoque_minimo')}}"
                       placeholder="Estoque Minimo"
                       class="borda-preta">
                {{ $errors->has('estoque_minimo') ? $errors->first('estoque_minimo') : '' }}
                <input type="number" name="estoque_maximo"
                       value="{{ $produto_detalhe->estoque_maximo ?? old('estoque_maximo')}}"
                       placeholder="Estoque Máximo"
                       class="borda-preta">
                {{ $errors->has('estoque_maximo') ? $errors->first('estoque_maximo') : '' }}
                <button type="submit">Cadastrar</button>
            </form>
