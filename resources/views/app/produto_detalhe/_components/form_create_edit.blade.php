@if(isset($produto_detalhe->id))
    <form action="{{route('produto-detalhe.update', ['produto_detalhe'=>$produto_detalhe->id])}}" method="post">
        @csrf
        @method('PUT')
        @else
            <form action="{{route('produto-detalhe.store')}}" method="post">
                @csrf
                @endif
                <input type="text" name="produto_id" value="{{$produto_detalhe->produto_id ?? old('produto_id')}}"
                       placeholder="ID do Produto"
                       class="borda-preta"/>
                {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}

                <input type="number" name="comprimento" value="{{$produto_detalhe->comprimento ?? old('comprimento')}}"
                       placeholder="Comprimento do produto"
                       class="borda-preta"/>
                {{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}

                <input type="number" name="altura" value="{{$produto_detalhe->altura ?? old('altura')}}"
                       placeholder="Altura do produto"
                       class="borda-preta"/>
                {{ $errors->has('altura') ? $errors->first('altura') : '' }}

                <input type="number" name="largura" value="{{$produto_detalhe->largura ?? old('largura')}}"
                       placeholder="Largura do produto"
                       class="borda-preta"/>
                {{ $errors->has('largura') ? $errors->first('largura') : '' }}

                <select name="unidade_id">
                    <option value="">Selecione a unidade de medida</option>
                    @foreach($unidades as $unidade)
                        <option value="{{$unidade->id}}">{{$unidade->descricao}}</option>
                    @endforeach
                </select>

                <button type="submit">Cadastrar</button>
            </form>
