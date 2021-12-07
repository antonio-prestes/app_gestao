<form action="{{route('pedido-produto.store',['pedido'=>$pedido,'produto'=>$produtos])}}" method="post">
    @csrf

    <select name="produto_id">
        <option value="">Selecione um produto</option>
        @foreach($produtos as $produto)
            <option
                value="{{$produto->id}}"{{  old('cliente_id') ==$produto->id ? 'selected' : '' }}>{{$produto->nome}}</option>
        @endforeach
    </select>
    {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}


    <button type="submit">Cadastrar</button>
</form>
